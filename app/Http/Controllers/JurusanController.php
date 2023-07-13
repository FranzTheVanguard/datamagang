<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
    //**
    //* Display a listing of the resource.
    //*
    //* @return \Illuminate\Http\Response
    //*
   public function index()
   {
    $jurusans=Jurusan::get();
    return view('admin.jurusan.index',['title'=>'jurusan','jurusans'=>$jurusans]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('admin.jurusan.create',['title'=>'Tambah Jurusan']);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
    Jurusan::create([

           'kode_jurusan'=>$request->kode_jurusan,
           'nama_jurusan'=>$request->nama_jurusan,
         
       ]);
       return redirect('jurusan')->with('msg', 'Berhasil tambah Jurusan!');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Jurusan  $jurusan
    * @return \Illuminate\Http\Response
    */
   public function show(Jurusan $jurusan)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Jurusan $jurusan
    * @return \Illuminate\Http\Response
    */
   public function edit(Jurusan $jurusan)
   {
       $title="jurusan";
       return view('admin.jurusan.edit',compact('title','jurusan'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Jurusan $jurusan
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Jurusan $jurusan)
   {
       $jurusan->update([

        'kode_jurusan'=>$request->kode_jurusan,
        'nama_jurusan'=>$request->nama_jurusan,
      
       ]);
       return redirect('jurusan')->with('msg', 'Berhasil edit jurusan!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Jurusan  $jurusan
    * @return \Illuminate\Http\Response
    */
   public function destroy(Jurusan $jurusan)
   {
       // object = ->
       $jurusan->delete();
       return redirect('jurusan')->with('msg', 'Berhasil hapus jurusan!');
   }
}
