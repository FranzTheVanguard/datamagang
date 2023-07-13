@extends('layouts.admin')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row ">
        <div class="col-12 mt-3 mb-3">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-check"></i> Info!</h5>
                    {{ session('success') }}
                </div>
            @endif
            <a href="{{ route('profil.create') }}" class="float-right btn btn-success">Tambah Profil</a>
        </div>
    </div>
    <div class="card-body">
        <p>
            @if (session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif
        </p>
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example1">
                <thead>
                    <tr class="btn-primary">
                        <th class="text-center" scope="col">Nama Peserta</th>
                        <th class="text-center" scope="col">Jenis Kelamin</th>
                        <th class="text-center" scope="col">Tanggal Lahir</th>
                        <th class="text-center" scope="col">Ada User</th>
                        <th class="text-center" scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($profils as $profil)
                        <tr>
                            <td class="text-center">{{ $profil->nama_peserta }}</td>
                            <td class="text-center">{{ $profil->jenis_kelamin }}</td>
                            <td class="text-center">
                                {{ \Carbon\Carbon::createFromTimeStamp(strtotime($profil->tanggal_lahir))->format('d/m/Y') }}
                            </td>
                            @if ($profil->user)
                                <td class="text-center"><i class="fas fa-check"></i></td>
                            @else
                                <td class="text-center"><i class="fas fa-times"></i> </td>
                            @endif
                            <td class="text-center">
                                <div class="d-flex justify-content-center">
                                    <a href="{{ route('profil.edit', $profil->id) }}" class="btn btn-sm btn-warning mx-1"><i
                                            class="fa fa-edit"></i> Edit</a>
                                    <form method="POST" action="{{ route('profil.destroy', $profil->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('yakin hapus data ini?')"
                                            class="btn btn-sm btn-danger">Hapus</button>
                                    </form>
                                </div>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </div>

    </div>
    </div>
@endsection
