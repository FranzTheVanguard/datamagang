@extends('layouts.admin')
@section('content')


<div class="row">

    <!-- left column -->
    <div class="col-md-6 mt-3">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form  Edit Tugas Magang</h3>
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
        <form method="post" action="{{ route('tugasmagang.update',$tugasmagang->id) }}">
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="id_user">Id User</label>
              <input type="string" class="form-control" id="id_user" name="id_user" value="{{ $tugasmagang->id_user }}" placeholder="id_user" required>
            </div>
            <div class="form-group">
              <label for="tugas">tugas</label>
              <input type="string" class="form-control" id="tugas" name="tugas" value="{{ $tugasmagang->tugas }}" placeholder="tugas" required>
            </div>
              <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="string" class="form-control" id="deskripsi" name="deskripsi" value="{{ $tugasmagang->deskripsi }}" placeholder="deskripsi" required>
              </div>
              <div class="form-group">
                <label for="tanggal_tugas">Tanggal Tugas</label>
                <input type="date" class="form-control" id="tanggal_tugas" name="tanggal_tugas" value="{{ $tugasmagang->tanggal_tugas}}" placeholder="tanggal_tugas" required>
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