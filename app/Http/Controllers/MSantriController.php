<?php

namespace App\Http\Controllers;

use App\MSantri;
use Illuminate\Http\Request;

class MSantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $santri = MSantri::all();
        return view('santri\santri',compact('santri'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MSantri  $mSantri
     * @return \Illuminate\Http\Response
     */
    public function show(MSantri $mSantri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MSantri  $mSantri
     * @return \Illuminate\Http\Response
     */
    public function edit(MSantri $mSantri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MSantri  $mSantri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MSantri $mSantri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MSantri  $mSantri
     * @return \Illuminate\Http\Response
     */
    public function destroy(MSantri $mSantri)
    {
        //
    }
}
