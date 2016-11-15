<?php

namespace Modules\Api\Http\Controllers;

use Modules\Api\Entities\Machine;
use Modules\Api\Transformers\MachineTransformer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Response as IlluminateResponse;
use Modules\Api\Objects\APIError;

class MachineController extends Controller {

    protected $machineTransformer, $meta, $request, $response;


    /**
     * MachineController constructor.
     *
     * @param MachineTransformer $machineTransformer
     * @param JsonResponse       $response
     * @param Request            $request
     */
    public function __construct(MachineTransformer $machineTransformer, JsonResponse $response, Request $request)
    {
        //$this->middleware('auth');
        $this->machineTransformer = $machineTransformer;
        $this->request = $request;
        $this->response = $response;
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

        parent::checkLimitHasValidChars();

        $machines = Machine::paginate($this->limit);

        return $this->response->setData(\Fractal::collection($machines)->transformWith($this->machineTransformer));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return APIError::NotAllowed();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $machine = Machine::create([
            'type_id'      => Input::get('type_id'),
            'user_id'      => Input::get('user_id'),
            'location_id'  => Input::get('location_id'),
            'machine_name' => Input::get('machine_name')
        ]);

        return response()->json([
            'status_code'        => IlluminateResponse::HTTP_CREATED,
            'status_description' => "Resource #{$machine->id} has been created.",
            'resource_id'        => $machine->id
        ], IlluminateResponse::HTTP_CREATED);
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
        try
        {
            $machines = Machine::findOrFail($id);
        } catch (\Exception $e)
        {
            return response()->json([
                'error_code'        => IlluminateResponse::HTTP_NOT_FOUND,
                'error_description' => IlluminateResponse::$statusTexts['404']
            ], IlluminateResponse::HTTP_NOT_FOUND);
        }

        return \Fractal::item($machines)->transformWith($this->machineTransformer)->addMeta(parent::addMeta())->toArray();
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
        return APIError::NotAllowed();
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
        try
        {
            $machine = Machine::findOrFail($id);
            $machine->type_id = Input::get('type_id');
            $machine->user_id = Input::get('user_id');
            $machine->location_id = Input::get('location_id');
            $machine->machine_name = Input::get('machine_name');

            $machine->save();

            return response()->json([
                'status_code'        => IlluminateResponse::HTTP_OK,
                'status_description' => "Resource #{$id} has been updated.",
                'resource_id'        => $id
            ], IlluminateResponse::HTTP_OK);
        } catch (\Exception $e)
        {
            return response()->json([
                'error_code'        => IlluminateResponse::HTTP_NOT_FOUND,
                'error_description' => IlluminateResponse::$statusTexts['404']
            ], IlluminateResponse::HTTP_NOT_FOUND);
        }
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
        try
        {
            $machines = Machine::findOrFail($id);
            if (isset($machine_id))
            {
                $machine_id = $machines->id;
            }
            $machines->delete();

            return response()->json([
                'status_code'        => IlluminateResponse::HTTP_OK,
                'status_description' => "Resource #{$machine_id} has been deleted.",
                'resource_id'        => $machine_id
            ], IlluminateResponse::HTTP_OK);
        } catch (\Exception $e)
        {
            return response()->json([
                'error_code'        => IlluminateResponse::HTTP_NOT_FOUND,
                'error_description' => IlluminateResponse::$statusTexts['404']
            ], IlluminateResponse::HTTP_NOT_FOUND);
        }
    }
}
