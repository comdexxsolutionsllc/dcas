<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class ApiController extends Controller
{


    // Begin Ticket Api Methods

    public function ticketData(){

        $result['data'] = DB::table('tickets')
                         ->select('id as Id',
                                  'ticket_name as Name',
                                  'created_at as Created')
                         ->get();

        return json_encode($result);

    }

    public function ticketVueData(Request $request){

        $column = 'id';
        $direction = 'asc';

        if ($request->has('column')){

            $column = $request->get('column');
            if ($column == 'Id'){
                $direction = $request->get('direction') == 1 ? 'asc' : 'desc';
            } else {

                $direction = $request->get('direction') == 1 ? 'desc' : 'asc';
            }


        }

        if ($request->has('keyword')){

            $keyword = $request->get('keyword');

            $tickets = DB::table('tickets')
                ->select('id as Id',
                    'ticket_name as Name',
                    'created_at as Created')
                ->where('ticket_name', 'like', '%' . $keyword . '%')
                ->orderBy($column, $direction)
                ->paginate(10);

            return response()->json($tickets);



        }

        $tickets = DB::table('tickets')
                             ->select('id as Id',
                                      'ticket_name as Name',
                                      'created_at as Created')
                             ->orderBy($column, $direction)
                             ->paginate(10);

        return response()->json($tickets);

    }

    // End Ticket Api Methods




    // Begin Software Api Methods

    public function softwareData(){

        $result['data'] = DB::table('softwares')
                         ->select('id as Id',
                                  'software_name as Name',
                                  'created_at as Created')
                         ->get();

        return json_encode($result);

    }

    public function softwareVueData(Request $request){

        $column = 'id';
        $direction = 'asc';

        if ($request->has('column')){

            $column = $request->get('column');
            if ($column == 'Id'){
                $direction = $request->get('direction') == 1 ? 'asc' : 'desc';
            } else {

                $direction = $request->get('direction') == 1 ? 'desc' : 'asc';
            }


        }

        if ($request->has('keyword')){

            $keyword = $request->get('keyword');

            $softwares = DB::table('softwares')
                ->select('id as Id',
                    'software_name as Name',
                    'created_at as Created')
                ->where('software_name', 'like', '%' . $keyword . '%')
                ->orderBy($column, $direction)
                ->paginate(10);

            return response()->json($softwares);



        }

        $softwares = DB::table('softwares')
                             ->select('id as Id',
                                      'software_name as Name',
                                      'created_at as Created')
                             ->orderBy($column, $direction)
                             ->paginate(10);

        return response()->json($softwares);

    }

    // End Software Api Methods




    // Begin Machine Api Methods

    public function machineData(){

        $result['data'] = DB::table('machines')
                         ->select('id as Id',
                                  'machine_name as Name',
                                  'created_at as Created')
                         ->get();

        return json_encode($result);

    }

    public function machineVueData(Request $request){

        $column = 'id';
        $direction = 'asc';

        if ($request->has('column')){

            $column = $request->get('column');
            if ($column == 'Id'){
                $direction = $request->get('direction') == 1 ? 'asc' : 'desc';
            } else {

                $direction = $request->get('direction') == 1 ? 'desc' : 'asc';
            }


        }

        if ($request->has('keyword')){

            $keyword = $request->get('keyword');

            $machines = DB::table('machines')
                ->select('id as Id',
                    'machine_name as Name',
                    'created_at as Created')
                ->where('machine_name', 'like', '%' . $keyword . '%')
                ->orderBy($column, $direction)
                ->paginate(10);

            return response()->json($machines);



        }

        $machines = DB::table('machines')
                             ->select('id as Id',
                                      'machine_name as Name',
                                      'created_at as Created')
                             ->orderBy($column, $direction)
                             ->paginate(10);

        return response()->json($machines);

    }

    // End Machine Api Methods



}
