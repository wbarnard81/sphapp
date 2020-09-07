<?php

namespace App\Http\Controllers;

use App\Pcreturn;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PcreturnController extends Controller
{
    public function index()
    {
        $pcreturns = Pcreturn::all();
        $siteNames = Setting::all();

        return view('pages.pcreturns.index', ['pcreturns' => $pcreturns, 'siteNames' => $siteNames]);
    }

    public function create()
    {
        $siteNames = Setting::all();
        return view('pages.pcreturns.create', ['siteNames' => $siteNames]);
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'site' => 'required|min:4|max:50',
            'fullname' => 'required|min:4|max:50',
            'email' => 'required|email',
            'telephone' => 'numeric',
            'serialnumber' => 'max:25',
            'software' => 'max:20',
            'notes' => 'max:255',
        ]);
        $data = $validator->validate();

        Pcreturn::create($data);

        return redirect('/')->with('success', 'Your PC Return has been logged.');
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

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'site' => 'required|min:4|max:50',
                'fullname' => 'required|min:4|max:50',
                'email' => 'required|email',
                'telephone' => 'numeric',
                'serialnumber' => 'max:25',
                'software' => 'max:20',
                'notes' => 'max:255',
            ]);
            $data = $validator->validate();

            $pcupdate = Pcreturn::find($id);
            $pcupdate->update($data);
            $pcupdate->save();
        } catch (\Exception $exception) {
            return redirect('/pcreturns')->with('error', 'Error: ' . $exception->getMessage);
        }

        return redirect('/pcreturns')->with('success', 'The return has been updated.');
    }

    public function destroy($id)
    {
        try {
            $pcreturns = Pcreturn::find($id);
            $pcreturns->delete();
        } catch (\Exception $exception) {
            return redirect('/pcreturns')->with('error', $exception->getMessage());
        }

        return redirect('/pcreturns')->with('success', 'The return has been deleted.');
    }
}
