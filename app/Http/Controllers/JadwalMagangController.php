<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalMagang;

class JadwalMagangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwalmagangs=JadwalMagang::get();
       return view('admin.jadwalmagang.index',['title'=>'jadwalmagang','jadwalmagangs'=>$jadwalmagangs]);
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('admin.jadwalmagang.create',['title'=>'Tambah Jadwal Magang']);
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
       JadwalMagang::create([

           'nama_peserta'=>$request->nama_peserta,
           'nama_jurusan'=>$request->nama_jurusan,
           'tanggal_mulai'=>$request->tanggal_mulai,
           'tanggal_selesai'=>$request->tanggal_selesai,
       ]);
       return redirect('jadwalmagang')->with('msg', 'Berhasil Tambah Jadwal Magang!');
   }

   /**
    * Display the specified resource.
    *
    * @param  \App\Models\JadwalMagang  $jadwalmagang
    * @return \Illuminate\Http\Response
    */
   public function show(JadwalMagang $jadwalmagang)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Models\JadwalMagang  $jadwalmagang
    * @return \Illuminate\Http\Response
    */
   public function edit(JadwalMagang $jadwalmagang)
   {
       $title="jadwalmagang";
       return view('admin.jadwalmagang.edit',compact('title','jadwalmagang'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Models\JadwalMagang  $jadwalmagang
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, JadwalMagang $jadwalmagang)
   {
       $jadwalmagang->update([

        'nama_peserta'=>$request->nama_peserta,
        'nama_jurusan'=>$request->nama_jurusan,
        'tanggal_mulai'=>$request->tanggal_mulai,
        'tanggal_selesai'=>$request->tanggal_selesai,
       ]);
       return redirect('jadwalmagang')->with('msg', 'Berhasil Edit Jadwal Magang!');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Models\Instansi  $instansi
    * @return \Illuminate\Http\Response
    */
   public function destroy(JadwalMagang $jadwalmagang)
   {
       // object = ->
       $jadwalmagang->delete();
       return redirect('jadwalmagang')->with('msg', 'Berhasil Hapus Jadwal Magang!');
   }
}
