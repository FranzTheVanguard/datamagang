@extends('layouts.admin')
@section('content')


<div class="row">

    <!-- left column -->
    <div class="col-md-6 mt-3">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Profil</h3>
        </div>
        @if(count($errors) > 0)
        <div class="alert alert-info alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-info"></i> Info!</h5>
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
                @endforeach
          </div>
          @endif
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="{{ route('profil.store') }}">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="nama_peserta">Nama Peserta</label>
              <input type="string" class="form-control" id="nama_peserta" name="nama_peserta" placeholder="Nama Peserta" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" required>
            </div>
          


          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->





    </div>
    <!--/.col (left) -->
  </div>



 @endsection