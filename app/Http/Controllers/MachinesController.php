<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DCASDomain\Models\Machine;

use Carbon\Carbon;
use Datatables;
use Input;
use Redirect;

class MachinesController extends Controller {

    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('machines.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('machines.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $model = Machine::create($request->all());

        return redirect()->route('machines.index', [ $model ])->with('message', 'Machine created');
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
        $model = Machine::findOrFail($id);
        //$model = Machine::onlyTrashed()->get();

        //return $model;

        return view('machines.show', compact('model'));
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
        $model = Machine::findOrFail($id);

        return view('machines.add', compact('model'));
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
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy(Request $request, $id)
    {

        $machine = Machine::findOrFail($id);

        $machine->delete();

        return redirect('/machines/index');

    }


    /**
     * Display the specified resource that has been trashed.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function showWithTrashed($id)
    {
        $model = Machine::withTrashed()->where('id', $id)->get();

        return view('machines.show', compact('model'));
    }


    /**
     * Show the form for editing the specified resource that has been trashed.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function editWithTrashed($id)
    {
        $model = Machine::withTrashed()->where('id', $id)->get();

        return view('machines.add', compact('model'));
    }


    public function grid(Request $request)
    {
        $machines = Machine::select([
            'machines.id',
            'machines.created_at',
            'machines.updated_at',
            'machines.deleted_at',
            'machines.type_id',
            'machines.user_id',
            'machines.location_id',
            'machines.machine_name'
        ]);

        return Datatables::of($machines)->make();
    }

    protected function formatDate(Request $request, Carbon $date)
    {
        ($request->get('date')) ? true : false;

        return $date;
    }
}

