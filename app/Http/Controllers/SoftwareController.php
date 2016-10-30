<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Software;
use Illuminate\Support\Facades\Redirect;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('software.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('software.create');
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
            'software_name' => 'required|unique:softwares|string|max:30',

        ]);

        $software = Software::create(['software_name' => $request->software_name]);
        $software->save();

        return Redirect::route('software.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $software = Software::findOrFail($id);

        return view('software.show', compact('software'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $software = Software::findOrFail($id);

        return view('software.edit', compact('software'));
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
            'software_name' => 'required|string|max:40|unique:softwares,software_name,' .$id

        ]);
        $software = Software::findOrFail($id);
        $software->update(['software_name' => $request->software_name]);


        return Redirect::route('software.show', ['software' => $software]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Software::destroy($id);

        return Redirect::route('software.index');
    }
}