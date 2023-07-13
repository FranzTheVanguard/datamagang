<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BagianMagang;

class BagianMagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bagianmagangs=BagianMagang::get();
       return view('admin.bagianmagang.index',['title'=>'bagianmagang','bagianmagangs'=>$bagianmagangs]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('admin.bagianmagang.create',['title'=>'Tambah Bagian Magang']);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       BagianMagang::create([

           'kode_bagian'=>$request->kode_bagian,
           'nama_bagian'=>$request->nama_bagian,
       ]);
       return redirect('bagianmagang')->with('msg', 'Berhasil Tambah Bagian Magang!');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\BagianMagang  $bagianmagang
    * @return \Illuminate\Http\Response
    */
   public function show(BagianMagang $bagianmagang)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\BagianMagang  $bagianmagang
    * @return \Illuminate\Http\Response
    */
   public function edit(BagianMagang $bagianmagang)
   {
       $title="bagianmagang";
       return view('admin.bagianmagang.edit',compact('title','bagianmagang'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\BagianMagang $bagianmagang
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, BagianMagang $bagianmagang)
   {
       $bagianmagang->update([

        'kode_bagian'=>$request->kode_bagian,
        'nama_bagian'=>$request->nama_bagian,
       ]);
       return redirect('bagianmagang')->with('msg', 'Berhasil Edit Bagian Magang!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\BagianMagang   $bagianmagang
    * @return \Illuminate\Http\Response
    */
   public function destroy(BagianMagang  $bagianmagang)
   {
       // object = ->
       $bagianmagang->delete();
       return redirect('bagianmagang')->with('msg', 'Berhasil Hapus Bagian Magang!');
   }
}
