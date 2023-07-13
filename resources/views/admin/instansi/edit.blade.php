@extends('layouts.admin')
@section('content')


<div class="row">

    <!-- left column -->
    <div class="col-md-6 mt-3">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form  Edit Instansi</h3>
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
        <form method="post" action="{{ route('instansi.update',$instansi->id) }}">
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="nama_instansi">Nama Instansi</label>
              <input type="text" class="form-control" id="nama_instansi" name="nama_instansi" value="{{ $instansi->nama_instansi }}" placeholder="nama_instansi" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $instansi->alamat }}" placeholder="alamat" required>
              </div>
              <div class="form-group">
                <label for="no_telepon">No Telepon</label>
                <input type="string" class="form-control" id="no_telepon" name="no_telepon" value="{{ $instansi->no_telepon }}" placeholder="no_telepon" required>
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