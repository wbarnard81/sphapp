<?php

namespace App\Http\Controllers;

use \App\Computer;
use \App\Setting;
use \App\Http\Requests\ComputerCreateRequest;
use \Illuminate\Http\Request;

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

    public function list()
    {
        $computers = Computer::all();

        return view('pages.list')->with('computers', $computers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siteNames = Setting::all();
        return view('pages.addcomputer')->with('siteNames', $siteNames);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ComputerCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComputerCreateRequest $computerCreateRequest)
    {
	Computer::create($computerCreateRequest->all());

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
        $computer = Computer::findOrFail($id);
        $siteNames = Setting::all();

        return view('pages.edit')->with(['computer' => $computer, 'siteNames' => $siteNames]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ComputerCreateRequest $computerCreateRequest, $id)
    {
        try {
            $computer = Computer::find($id);
            $computer->update($computerCreateRequest->all());
            $computer->save();
        } catch (\Exception $exception) {
            return redirect('/computers')->with('error', 'Error: ' . $exception->getMessage);
        }

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
        try {
            $computer = Computer::find($id);
            $computer->delete();
        } catch (\Exception $exception) {
            return redirect('/computers')->with('error', $exception->getMessage());
        }

        return redirect('/computers')->with('success', 'Computer has been Deleted.');
    }
}
