<?php

namespace App\Http\Controllers;

use App\Pcreturn;
use Illuminate\Http\Request;

class PcreturnController extends Controller
{
    public function index()
    {
        $pcreturns = Pcreturn::all();

        return view('pages.pcreturns.index')->with('pcreturns', $pcreturns);
    }

    public function create()
    {
        return view('pages.pcreturns.create');
    }

    public function store(Pcreturn $Pcreturn)
    {
        Pcreturn::create($Pcreturn->all());

        return redirect('/pcreturns')->with('success', 'Pcreturn has been added.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pcreturns = Pcreturn::findOrFail($id);

        return view('pages.pcreturns.edit')->with('pcreturns', $pcreturns);
    }

    public function update(Pcreturn $pcreturns, $id)
    {
        try {
            $pcreturns = Pcreturn::find($id);
            $pcreturns->update($pcreturns->all());
            $pcreturns->save();
        } catch (\Exception $exception) {
            return redirect('/pcreturns')->with('error', 'Error: ' . $exception->getMessage);
        }

        return redirect('/pcreturns')->with('success', 'Pcreturn has been updated.');
    }

    public function destroy($id)
    {
        try {
            $pcreturns = Pcreturn::find($id);
            $pcreturns->delete();
        } catch (\Exception $exception) {
            return redirect('/pcreturns')->with('error', $exception->getMessage());
        }

        return redirect('/pcreturns')->with('success', 'Pcreturn has been Deleted.');
    }
}
