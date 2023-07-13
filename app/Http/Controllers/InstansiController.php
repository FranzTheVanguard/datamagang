<?php

namespace App\Http\Controllers;

use App\Models\Instansi;
use Illuminate\Http\Request;

class InstansiController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instansis=Instansi::get();
       return view('admin.instansi.index',['title'=>'instansi','instansis'=>$instansis]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('admin.instansi.create',['title'=>'Tambah Instansi']);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       Instansi::create([

           'nama_instansi'=>$request->nama_instansi,
           'alamat'=>$request->alamat,
           'no_telepon'=>$request->no_telepon,
       ]);
       return redirect('instansi')->with('msg', 'Berhasil Tambah Instansi!');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\Instansi  $instansi
    * @return \Illuminate\Http\Response
    */
   public function show(Instansi $instansi)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\Instansi  $instansi
    * @return \Illuminate\Http\Response
    */
   public function edit(Instansi $instansi)
   {
       $title="instansi";
       return view('admin.instansi.edit',compact('title','instansi'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\Instansi  $instansi
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, Instansi $instansi)
   {
       $instansi->update([

        'nama_instansi'=>$request->nama_instansi,
        'alamat'=>$request->alamat,
        'no_telepon'=>$request->no_telepon,
       ]);
       return redirect('instansi')->with('msg', 'Berhasil Edit Instansi!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Instansi  $instansi
    * @return \Illuminate\Http\Response
    */
   public function destroy(Instansi $instansi)
   {
       // object = ->
       $instansi->delete();
       return redirect('instansi')->with('msg', 'Berhasil Hapus Instansi!');
   }
}
