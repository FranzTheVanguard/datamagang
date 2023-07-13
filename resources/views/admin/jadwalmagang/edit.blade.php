@extends('layouts.admin')
@section('content')


<div class="row">

    <!-- left column -->
    <div class="col-md-6 mt-3">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form  Edit Jadwal Magang</h3>
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
        <form method="post" action="{{ route('jadwalmagang.update',$jadwalmagang->id) }}">
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="nama_peserta">Nama Peserta</label>
              <input type="string" class="form-control" id="nama_peserta" name="nama_peserta" value="{{ $jadwalmagang->nama_peserta }}" placeholder="nama_peserta" required>
            </div>
            <div class="card-body">
            <div class="form-group">
              <label for="nama_jurusan">Nama Jurusan</label>
              <input type="string" class="form-control" id="nama_jurusan" name="nama_jurusan" value="{{ $jadwalmagang->nama_jurusan }}" placeholder="nama_jurusan" required>
            </div>
              <div class="form-group">
                <label for="tanggal_mulai">Tanggal Mulai</label>
                <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="{{ $jadwalmagang->tanggal_mulai }}" placeholder="tanggal_mulai" required>
              </div>
              <div class="form-group">
                <label for="tanggal_selesai">Tanggal Selesai</label>
                <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="{{ $jadwalmagang->tanggal_selesai}}" placeholder="tanggal_selesai" required>
              </div>
              <div class="form-group">
                <label for="profil">Profil</label>
                <select name="profil" class="form-control" id="profil">
                  @foreach ($profiles as $item)
                  <option value={{$item->id}}>{{$item->nama_peserta}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="bagian">Bagian Magang</label>
                <select name="bagian" class="form-control" id="bagian">
                  @foreach ($bagians as $item)
                  <option value={{$item->id}}>{{$item->nama_bagian}}</option>
                  @endforeach
                </select>
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