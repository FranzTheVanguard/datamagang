<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //**
    //* Display a listing of the resource.
    //*
    //* @return \Illuminate\Http\Response
    //*
    public function index()
    {
     $profils=Profil::get();
     return view('admin.profil.index',['title'=>'profil','profils'=>$profils]);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profil.create',['title'=>'Tambah Profil']);
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     Profil::create([
 
            'nama_peserta'=>$request->nama_peserta,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
          
        ]);
        return redirect('profil')->with('msg', 'Berhasil tambah Profil!');
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Profil $profil)
    {
        //
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profil $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(Profil $profil)
    {
        $title="profil";
        return view('admin.profil.edit',compact('title','profil'));
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profil $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profil $profil)
    {
        $profil->update([
 
            'nama_peserta'=>$request->nama_peserta,
            'tanggal_lahir'=>$request->tanggal_lahir,
            'jenis_kelamin'=>$request->jenis_kelamin,
          
        ]);
        return redirect('profil')->with('msg', 'Berhasil edit profil!');
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profil $profil)
    {
        // object = ->
        $profil->delete();
        return redirect('profil')->with('msg', 'Berhasil hapus profil!');
    }
}
