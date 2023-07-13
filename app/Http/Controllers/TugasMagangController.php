<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TugasMagang;
use App\Models\User;

class TugasMagangController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tugasmagangs=TugasMagang::get();
       return view('admin.tugasmagang.index',['title'=>'tugasmagang','tugasmagangs'=>$tugasmagangs]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('admin.tugasmagang.create',['title'=>'Tambah Tugas Magang'])->with('users', User::whereDoesntHave('tugasMagang')->get());
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       TugasMagang::create([
      
           'id_user'=>$request->user,
           'tugas'=>$request->tugas,
           'deskripsi'=>$request->deskripsi,
           'tanggal_tugas'=>$request->tanggal_tugas,
       ]);
       return redirect('tugasmagang')->with('msg', 'Berhasil Tambah Tugas Magang!');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\TugasMagang  $tugasmagang
    * @return \Illuminate\Http\Response
    */
   public function show(TugasMagang $tugasmagang)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\TugasMagang $tugasmagang
    * @return \Illuminate\Http\Response
    */
   public function edit(TugasMagang $tugasmagang)
   {
       $title="tugasmagang";
       return view('admin.tugasmagang.edit',compact('title','tugasmagang'))->with('users', User::whereDoesntHave('tugasMagang')->get());
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\TugasMagang  $tugasmagang
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, TugasMagang $tugasmagang)
   {
       $tugasmagang->update([

        'id_user'=>$request->user,
        'tugas'=>$request->tugas,
        'deskripsi'=>$request->deskripsi,
        'tanggal_tugas'=>$request->tanggal_tugas,
       ]);
       return redirect('tugasmagang')->with('msg', 'Berhasil Edit Tugas Magang!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\TugasMagang  $tugasmagang
    * @return \Illuminate\Http\Response
    */
   public function destroy(TugasMagang $tugasmagang)
   {
       // object = ->
       $tugasmagang->delete();
       return redirect('tugasmagang')->with('msg', 'Berhasil Hapus Tugas Magang!');
   }
}
