@extends('layouts.admin')
@section('content')


<div class="row">

    <!-- left column -->
    <div class="col-md-6 mt-3">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Jurusan</h3>
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
        <form method="post" action="{{ route('jurusan.store') }}">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="kode_jurusan">Kode Jurusan</label>
              <input type="string" class="form-control" id="kode_jurusan" name="kode_jurusan" placeholder="Kode Jurusan" required>
            </div>
            <div class="form-group">
              <label for="nama_jurusan">Nama Jurusan</label>
              <input type="text" class="form-control" id="nama_jurusan" name="nama_jurusan" placeholder="Nama Jurusan" required>
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