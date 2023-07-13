@extends('layouts.admin')
@section('content')


<div class="row">

    <!-- left column -->
    <div class="col-md-6 mt-3">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form Tambah Bagian Magang</h3>
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
        <form method="post" action="{{ route('bagianmagang.store') }}">
            @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="kode_bagian">Kode Bagian</label>
              <input type="string" class="form-control" id="kode_bagian" name="kode_bagian" placeholder="kode_bagian" required>
            </div>
            <div class="form-group">
              <label for="nama_bagian">Nama Bagian</label>
              <input type="string" class="form-control" id="nama_bagian" name="nama_bagian" placeholder="nama_bagian" required>
            </div>
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