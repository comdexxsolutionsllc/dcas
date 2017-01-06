<?php

namespace Modules\Api\Http\Controllers;

use App\User;
use Modules\Api\Transformers\UserTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class UserController extends Controller {

    protected $userTransformer, $meta, $request;


    /**
     * Constructor
     */
    public function __construct(UserTransformer $userTransformer, Request $request)
    {
        $this->userTransformer = $userTransformer;
        $this->request = $request;
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $this->limit = Input::get('limit', '25') ?: 25;

        parent::enforceLimit();

        $users = User::paginate($this->limit);

        return \Fractal::collection($users)->transformWith($this->userTransformer)->addMeta(parent::addMeta())->toArray();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return parent::NotImplemented();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        return parent::NotImplemented();
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        return parent::NotImplemented();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        return parent::NotImplemented();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id)
    {
        return parent::NotImplemented();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        return parent::NotImplemented();
    }


    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function impersonate($id)
    {
        $user = User::find($id);

        // Guard against administrator impersonate
        if ( ! $user->isAdministrator())
        {
            \Auth::user()->setImpersonating($user->id);
        } else
        {
            flash()->error('Impersonate disabled for this user.');
        }

        return redirect()->back();
    }


    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function stopImpersonate()
    {
        \Auth::user()->stopImpersonating();

        flash()->success('Welcome back!');

        return redirect()->back();
    }
}
