@extends('layouts.admin')
@section('content')


<div class="row">

    <!-- left column -->
    <div class="col-md-6 mt-3">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Form  Edit Profil</h3>
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
        <form method="post" action="{{ route('profil.update',$profil->id) }}">
            @csrf
            @method('PUT')
          <div class="card-body">
            <div class="form-group">
              <label for="nama_peserta">Nama Peserta</label>
              <input type="string" class="form-control" id="nama_peserta" name="nama_peserta" value="{{ $profil->nama_peserta }}" placeholder="nama_peserta" required>
            </div>
            <div class="form-group">
                <label for="name">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
                    <option value="Laki - laki">Laki - Laki</option>
                    <option value="Perempuan" @if ($profil->jenis_kelamin=='Perempuan')
                        selected
                    @endif>Perempuan</option>
                </select>
            </div>
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $profil->tanggal_lahir }}" placeholder="tanggal_lahir" required>
              </div>
              <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select name="jurusan" class="form-control" id="jurusan">
                  @foreach ($jurusans as $item)
                  <option value={{$item->id}}>{{$item->nama_jurusan}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="instansi">Jurusan</label>
                <select name="instansi" class="form-control" id="instansi">
                  @foreach ($instansis as $item)
                  <option value={{$item->id}}>{{$item->nama_instansi}}</option>
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