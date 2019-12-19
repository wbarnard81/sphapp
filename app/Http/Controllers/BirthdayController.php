<?php

namespace App\Http\Controllers;

use App\Birthday;
use Illuminate\Http\Request;

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

    public function store(Birthday $Birthday)
    {
        Birthday::create($Birthday->all());

        return redirect('/birthdays')->with('success', 'Birthday has been added.');
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

    public function update(Birthday $birthday, $id)
    {
        try {
            $birthday = Birthday::find($id);
            $birthday->update($birthday->all());
            $birthday->save();
        } catch (\Exception $exception) {
            return redirect('/birthdays')->with('error', 'Error: ' . $exception->getMessage);
        }

        return redirect('/birthdays')->with('success', 'Birthday has been updated.');
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
