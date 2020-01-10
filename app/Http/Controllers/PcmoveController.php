<?php

namespace App\Http\Controllers;

use App\Pcmove;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PcmoveController extends Controller
{
    public function index()
    {
        $pcmoves = Pcmove::all();

        return view('pages.pcmove.index')->with('pcmoves', $pcmoves);
    }

    public function create()
    {
        return view('pages.pcmove.create');
    }

    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'from_name' => 'required|min:4|max:100',
            'to_name' => 'required|min:4|max:100',
            'from_site' => 'required|min:4|max:100',
            'to_site' => 'required',
            'move_date' => 'required',
            'contact_details' => 'required|min:10',
        ]);
        $data = $validator->validate();

        Pcmove::create($data);

        return redirect('/')->with('success', 'Your PC Move has been logged.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $pcmove = Pcmove::findOrFail($id);

        return view('pages.pcmove.edit')->with('pcmove', $pcmove);
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'from_name' => 'required|min:4|max:100',
                'to_name' => 'required|min:4|max:100',
                'from_site' => 'required|min:4|max:100',
                'to_site' => 'required',
                'move_date' => 'required',
                'contact_details' => 'required|min:10',
            ]);
            $data = $validator->validate();

            $pcupdate = Pcmove::find($id);
            $pcupdate->update($data);
            $pcupdate->save();
        } catch (\Exception $exception) {
            return redirect('/pcmove')->with('error', 'Error: ' . $exception->getMessage);
        }

        return redirect('/pcmove')->with('success', 'The PC Move has been updated.');
    }

    public function destroy($id)
    {
        try {
            $pcmove = Pcmove::find($id);
            $pcmove->delete();
        } catch (\Exception $exception) {
            return redirect('/pcmove')->with('error', $exception->getMessage());
        }

        return redirect('/pcmove')->with('success', 'The PC Move has been deleted.');
    }
}
