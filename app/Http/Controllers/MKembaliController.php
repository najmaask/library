<?php

namespace App\Http\Controllers;

use App\MKembali;
use Illuminate\Http\Request;

class MKembaliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //crud untuk menampilkan data dari table
        $kembali = MKembali::all();
        return view('kembali\kembali',compact('kembali'));
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
     * @param  \App\MKembali  $mKembali
     * @return \Illuminate\Http\Response
     */
    public function show(MKembali $mKembali)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MKembali  $mKembali
     * @return \Illuminate\Http\Response
     */
    public function edit(MKembali $mKembali)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MKembali  $mKembali
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MKembali $mKembali)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MKembali  $mKembali
     * @return \Illuminate\Http\Response
     */
    public function destroy(MKembali $mKembali)
    {
        //
    }
}
