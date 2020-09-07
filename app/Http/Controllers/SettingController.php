<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

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
}
