<?php

namespace Modules\Api\Http\Controllers;

use DCASDomain\Models\Machine;
use Modules\Api\Transformers\MachineTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class MachineController extends Controller {

    protected $machineTransformer, $meta, $request;


    /**
     * Constructor
     *
     * @param MachineTransformer $machineTransformer
     * @param Request            $request
     */
    public function __construct(MachineTransformer $machineTransformer, Request $request) {
        //$this->middleware('auth');
        $this->machineTransformer = $machineTransformer;
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $this->limit = Input::get('limit', '25') ? : 25;

        parent::enforceLimit();

        $machines = Machine::where('user_id', '=', 1); // TODO

//        $machines = array_merge($machines, ['paginator' => [
////                'total_count' => $machines->total(),
////                'total_pages' => ceil($machines->total() / $machines->perPage()),
//                'current_page' => $machines->currentPage(),
//                'limit' => $machines->perPage()
//        ]]);


        return \Fractal::collection($machines)->transformWith($this->machineTransformer)
                        ->addMeta(parent::addMeta())->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return parent::NotImplemented();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        return parent::NotImplemented();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return parent::NotImplemented();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        return parent::NotImplemented();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        return parent::NotImplemented();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        return parent::NotImplemented();
    }
}
