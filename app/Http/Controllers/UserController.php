<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index',[
            'title'=>'User',
            'users'=>User::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('admin.user.create',['title'=>'Tambah user'])->with('profiles', Profil::whereDoesntHave('user')->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        extract($request->all());
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:users|max:50',
        ]);

        if ($validator->fails()) {
            return redirect('user/create')
                ->withErrors($validator)
                ->withInput();
        }
        $data=[
            'username'=>$username,
            'name'=>$name,
            'password'=>bcrypt($password),
            'role'=>$role,
            'id_profil'=>$profil,
        ];

        User::create($data);
        return redirect('user')->with('success', 'Berhasil Menambah Data User');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit',['title'=>'Edit user','user'=>$user])->with('profiles', Profil::whereDoesntHave('user')->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        extract($request->all());
        $data=[
            'role'=>$role,
            'name'=>$name,
            'id_profil'=>$profil,
        ];
        $user->update($data);
        return redirect('user')->with('success', 'Berhasil edit Data user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('user')->with('success', 'Berhasil Hapus Data user');
    }
}