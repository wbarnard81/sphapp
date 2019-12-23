<?php

namespace App\Http\Controllers;

use App\Birthday;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BirthdayController extends Controller
{
    public function index()
    {
        $birthdays = Birthday::all();

        return view('pages.birthdays.index')->with('birthdays', $birthdays);
    }

    public function create()
    {
        return view('pages.birthdays.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|min:4|max:50',
            'lastname' => 'required|min:4|max:50',
            'birthday' => 'required',
            'site' => 'required',
        ]);
        $data = $validator->validate();

        Birthday::create($data);

        return redirect('/birthdays')->with('success', 'The birthday has been added.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $birthday = Birthday::findOrFail($id);

        return view('pages.birthdays.edit')->with('birthday', $birthday);
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'firstname' => 'required|min:4|max:50',
                'lastname' => 'required|min:4|max:50',
                'birthday' => 'required',
                'site' => 'required',
            ]);
            $data = $validator->validate();

            $bdayupdate = Birthday::find($id);
            $bdayupdate->update($data);
            $bdayupdate->save();
        } catch (\Exception $exception) {
            return redirect('/birthdays')->with('error', 'Error: ' . $exception->getMessage);
        }

        return redirect('/birthdays')->with('success', 'The birthday has been updated.');
    }

    public function destroy($id)
    {
        try {
            $birthday = Birthday::find($id);
            $birthday->delete();
        } catch (\Exception $exception) {
            return redirect('/birthdays')->with('error', $exception->getMessage());
        }

        return redirect('/birthdays')->with('success', 'Birthday has been Deleted.');
    }
}
