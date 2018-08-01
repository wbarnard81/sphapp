<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Computer;

class ComputersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers = Computer::all();

        return view('pages.computers')->with('computers', $computers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addcomputer');
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
            'serialnumber' => 'required',
            'username' => 'required',
            'hostname' => 'required',
            'manufacturer' => 'required',
            'model' => 'required',
            'cpumodel' => 'required',
            'memory' => 'required',
        ]);

        $computer = new Computer;
        $computer->serialnumber = $request->input('serialnumber');
        $computer->username = $request->input('username');
        $computer->hostname = $request->input('hostname');
        $computer->manufacturer = $request->input('manufacturer');
        $computer->model = $request->input('model');
        $computer->cpumodel = $request->input('cpumodel');
        $computer->memory = $request->input('memory');
        $computer->save();

        return redirect('/computers')->with('success', 'Computer has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $computer = Computer::find($id);

        return view('pages.edit')->with('computer', $computer);
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
            'serialnumber' => 'required',
            'username' => 'required',
            'hostname' => 'required',
            'manufacturer' => 'required',
            'model' => 'required',
            'cpumodel' => 'required',
            'memory' => 'required',
        ]);

        $computer = Computer::find($id);
        $computer->serialnumber = $request->input('serialnumber');
        $computer->username = $request->input('username');
        $computer->hostname = $request->input('hostname');
        $computer->manufacturer = $request->input('manufacturer');
        $computer->model = $request->input('model');
        $computer->cpumodel = $request->input('cpumodel');
        $computer->memory = $request->input('memory');
        $computer->save();

        return redirect('/computers')->with('success', 'Computer has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $computer = Computer::find($id);
        $computer->delete();

        return redirect('/computers')->with('success', 'Computer has been Deleted.');
    }
}
