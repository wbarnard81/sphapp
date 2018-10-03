<?php

namespace App\Http\Controllers;

use \App\Computer;
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
     * @param  \App\Http\Requests\ComputerCreateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ComputerCreateRequest $computerCreateRequest)
    {
        // $this->validate($computerCreateRequest, [
        //     'sereialnumber' => 'unique:computers']);
        // dd($this);

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

        return view('pages.edit')->with('computer', $computer);
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
