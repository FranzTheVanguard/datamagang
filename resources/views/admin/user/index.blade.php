@extends('layouts.admin')
@section('content')


<div class="row ">
    <div class="col-12 mt-3 mb-3">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Info!</h5>
            {{ session('success') }}
          </div>

        @endif
        <a href="{{ route('user.create') }}" class="float-right btn btn-success">Tambah</a>
    </div>
</div>

<div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Daftar User</h3>

        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Role</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)


              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td><span class="tag tag-success">{{ $user->role }}</span></td>
                <td>
                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary mx-2"><b>Edit</b></a>
                    <form action="{{ route('user.destroy',$user->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('yakin hapus file ini?')"
                            class="btn btn-danger">Hapus</button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

 @endsection