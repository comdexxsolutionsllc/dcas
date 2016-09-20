<?php

namespace DCASDomain\Http\Controllers;

use DCASDomain\Models\Machine;
use DCASDomain\Transformers\MachineTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Response as IlluminateResponse;

class MachineController extends Controller {

    protected $machineTransformer, $meta, $request;
    private $epochtime, $locale;

    /**
     * Constructor
     */
    public function __construct(MachineTransformer $machineTransformer, Request $request) {
        $this->machineTransformer = $machineTransformer;
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        $machines = Machine::all();

        return \Fractal::collection($machines)->transformWith($this->machineTransformer)
                        ->addMeta($this->addMeta())->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        return $this->NotImplemented();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        return $this->NotImplemented();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return $this->NotImplemented();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        return $this->NotImplemented();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        return $this->NotImplemented();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        return $this->NotImplemented();
    }

    /**
     * Not Implemented Error Code.
     * 
     * @return JSON
     */
    private function NotImplemented() {
        return response()->json(
                        [
                    'error_code' => IlluminateResponse::HTTP_NOT_IMPLEMENTED,
                    'error_description' => IlluminateResponse::$statusTexts['501'],
                    $this->addMeta()
                        ], IlluminateResponse::HTTP_NOT_IMPLEMENTED);
    }

    /**
     * Checks if $_Get['debug'] is set.
     * 
     * @return boolean
     */
    protected function isDebug() {
        return (app('request')->exists('debug') &&
                ($this->request->input('debug') == 'true' || $this->request->input('debug') == '' )) ? true : false;
    }

    /**
     * Adds Metadata to the JSON output.
     * 
     * @return array
     */
    private function addMeta() {
        $this->epochtime = \Carbon\Carbon::now()->timestamp;
        $this->locale = \Carbon\Carbon::now()->tzName;

        return [
            'server' =>
            [
                '_name' => (string) $_SERVER['SERVER_NAME'],
                '_timestamp' => $this->epochtime,
                '_date' => date('Y-m-d'),
                '_locale' => $this->locale
            ],
            'debug' => $this->isDebug()
        ];
    }

}
