<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Machine;
use Illuminate\Support\Facades\Redirect;

class MachineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('machine.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('machine.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'machine_name' => 'required|unique:machines|string|max:30',

        ]);

        $machine = Machine::create(['machine_name' => $request->machine_name]);
        $machine->save();

        return Redirect::route('machine.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $machine = Machine::findOrFail($id);

        return view('machine.show', compact('machine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $machine = Machine::findOrFail($id);

        return view('machine.edit', compact('machine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'machine_name' => 'required|string|max:40|unique:machines,machine_name,' .$id

        ]);
        $machine = Machine::findOrFail($id);
        $machine->update(['machine_name' => $request->machine_name]);


        return Redirect::route('machine.show', ['machine' => $machine]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Machine::destroy($id);

        return Redirect::route('machine.index');
    }
}