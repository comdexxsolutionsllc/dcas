<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DCASDomain\Models\Machine;

use Datatables;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class MachinesController extends Controller {

    //
    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function index(Request $request)
    {
        return view('machines.index', []);
    }


    public function create(Request $request)
    {
        return view('machines.add', [
            []
        ]);
    }


    public function edit($id)
    {
        $machine = Machine::findOrFail($id);

        return view('machines.add', [
            'model' => $machine
        ]);
    }


    public function show(Request $request, $id)
    {
        $machine = Machine::findOrFail($id);

        return view('machines.show', [
            'model' => $machine
        ]);
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


    public function store(Request $request)
    {
        $input = Input::all();
        Machine::create($input);

        return Redirect::route('machines.index')->with('message', 'Machine created');
    }


    public function destroy(Request $request, $id)
    {

        $machine = Machine::findOrFail($id);

        $machine->delete();

        return redirect('/machines/index');

    }

}
