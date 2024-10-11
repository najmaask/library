<?php

namespace App\Http\Controllers;

use App\MBuku;
use Illuminate\Http\Request;

class MBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //crud untuk menampilkan data dari table
        $buku = MBuku::all();
        return view('buku\buku',compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku\dataBuku');
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
     * @param  \App\MBuku  $mBuku
     * @return \Illuminate\Http\Response
     */
    public function show(MBuku $mBuku)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MBuku  $mBuku
     * @return \Illuminate\Http\Response
     */
    public function edit(MBuku $mBuku)
    {
        //
        $buku = MBuku::where('Id',$id)->get();

        return view('buku_edit',compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MBuku  $mBuku
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MBuku $mBuku)
    {
        //
        $data = MBuku::where('Id',$id)->first();
        $data->NoBuku = $request->NoBuku;
        $data->JudulBuku = $request->JudulBuku;
        $data->Penerbit = $request->Penerbit;
        $data->TahunBuku = $request->TahunBuku;
        $data->Kategori = $request->Kategori;
        $data->StokBuku = $request->StokBuku;
        $data->save();
        return redirect()->route('buku.index')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MBuku  $mBuku
     * @return \Illuminate\Http\Response
     */
    public function destroy(MBuku $mBuku)
    {
        //
        $buku = MBuku::where('Id',$id)->first();
        $buku->delete();
        return redirect()->route('buku.index')->with('alert-success','Data berhasi dihapus!');
    }
}
