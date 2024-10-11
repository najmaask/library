<?php

namespace App\Http\Controllers;

use App\MPetugas;
use Illuminate\Http\Request;

class MPetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //crud untuk menampilkan data dari table
        $petugas = MPetugas::all();
        return view('petugas\petugas',compact('petugas'));
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
     * @param  \App\MPetugas  $mPetugas
     * @return \Illuminate\Http\Response
     */
    public function show(MPetugas $mPetugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MPetugas  $mPetugas
     * @return \Illuminate\Http\Response
     */
    public function edit(MPetugas $mPetugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MPetugas  $mPetugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MPetugas $mPetugas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MPetugas  $mPetugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(MPetugas $mPetugas)
    {
        //
    }
}
