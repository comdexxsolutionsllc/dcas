<?php

namespace DCASDomain\Http\Controllers;

use DCASDomain\Models\MachineType;
use DCASDomain\Transformers\MachineTypeTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class MachineTypeController extends Controller {

    protected $machineTypeTransformer, $meta, $request;

    /**
     * Constructor
     */
    public function __construct(MachineTypeTransformer $machineTypeTransformer, Request $request) {
        $this->machineTypeTransformer = $machineTypeTransformer;
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

        $machineTypes = MachineType::paginate($this->limit);

        return \Fractal::collection($machineTypes)->transformWith($this->machineTypeTransformer)
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
