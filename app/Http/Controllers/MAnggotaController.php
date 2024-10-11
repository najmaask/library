<?php

namespace App\Http\Controllers;

use App\MAnggota;
use Illuminate\Http\Request;

class MAnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //crud untuk menampilkan data dari table
        $data = MAnggota::all();
        return view('anggota\anggota',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('anggota\dataAnggota');
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
        $data = new MAnggota();
       $data->NoAnggota = $request->NoAnggota;
       $data->NamaAnggota = $request->NamaAnggota;
       $data->TempatLahir = $request->TempatLahir;
       $data->TglLahir = $request->TglLahir;
       $data->Kelas = $request->Kelas;
       $data->save();
       return redirect('anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MAnggota  $mAnggota
     * @return \Illuminate\Http\Response
     */
    public function show(MAnggota $mAnggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MAnggota  $mAnggota
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $data = MAnggota::find($id);
        return view('anggota/EditAnggota',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MAnggota  $mAnggota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $data = array(  'NoAnggota' => $request->input('NoAnggota'),
                        'NamaAnggota' => $request->input('NamaAnggota'),
                        'TempatLahir' => $request->input('TempatLahir'),
                        'TglLahir' => $request->input('TglLahir'),
                        'Kelas' => $request->input('Kelas'));
        MAnggota::where('Id',$id)->update($data);
        return redirect('anggota')->with('info','Update berhasil :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MAnggota  $mAnggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        MAnggota::where('Id',$id)->delete();
        return redirect('anggota')->with('info','Data Berhasil Dihapus');
    }
}
