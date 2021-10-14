<?php

namespace App\Http\Controllers;

use App\Document;
use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteNames = Setting::all();

        return view('pages.settings.index')->with('siteNames', $siteNames);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(['siteName' => 'required|unique:settings,siteName']);
        Setting::create($validatedData);
        
        $siteNames = Setting::all();

        return view('pages.settings.index')->with('siteNames', $siteNames);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        $siteName = Setting::findOrFail($setting->id);

        return view('pages.settings.edit')->with('siteName', $siteName);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $validatedData = $request->validate(['siteName' => 'required|unique:settings,siteName']);
        $siteName = Setting::findOrFail($setting->id);
        $siteName->siteName = $validatedData['siteName'];
        $siteName->save();

        $siteNames = Setting::all();

        return view('pages.settings.index')->with('siteNames', $siteNames);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        $siteName = Setting::findOrFail($setting->id);
        $siteName->delete();

        $siteNames = Setting::all();

        return view('pages.settings.index')->with('siteNames', $siteNames);
    }

    public function upload(Request $request)
    {
        if($request['upload-type'] === "it-policy") {
            $uploadedFile = $request->file('file-upload')->storeAs('documents', $request->file('file-upload')->getClientOriginalName());
            
            Document::updateOrCreate(
                ['type' => 'it-policy'],
                ['name' => 'IT Policy', 'type' => 'it-policy', 'file-name' => $uploadedFile]
            );

            return redirect()->back();
        } else if ($request['upload-type'] === "email-policy") {
            $uploadedFile = $request->file('file-upload')->storeAs('documents', $request->file('file-upload')->getClientOriginalName());

            Document::updateOrCreate(
                ['type' => 'email-policy'],
                ['name' => 'Email Policy', 'type' => 'email-policy', 'file-name' => $uploadedFile]
            );

            return redirect()->back();
        } else if ($request['upload-type'] === "telephone-list") {
            $uploadedFile = $request->file('file-upload')->storeAs('documents', $request->file('file-upload')->getClientOriginalName());
            
            Document::updateOrCreate(
                ['type' => 'telephone-list'],
                ['name' => 'Telephone List', 'type' => 'telephone-list', 'file-name' => $uploadedFile]
            );

            return redirect()->back();
        }
    }
}
