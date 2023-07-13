@extends('layouts.admin')
 @section('content')


<!-- Small boxes (Stat box) -->
<div class="row">
  <div class="col-lg-3 col-6">
    <!-- small box -->
<div class="small-box bg-info">
      <div class="inner">
  <h3>{{ $countUser }}</h3>

        <p>User Registrations</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-plus"></i>
      </div>
      <a href="{{ route('user.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
   <!-- ./col -->
   <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $countInstansi}}</h3>

              <p>Instansi</p>
            </div>
            <div class="icon">
              <i class="fas fa-university"></i>
            </div>
            <a href="{{ route('instansi.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $countJurusan}}</h3>

              <p>Jurusan</p>
            </div>
            <div class="icon">
              <i class="fas fa-graduation-cap"></i>
            </div>
            <a href="{{ route('jurusan.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $countProfil}}</h3>

              <p>Profil</p>
            </div>
            <div class="icon">
              <i class="fas fa-user"></i>
            </div>
            <a href="{{ route('profil.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $countBagianMagang}}</h3>

              <p>Bagian Magang</p>
            </div>
            <div class="icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <a href="{{ route('bagianmagang.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

       
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $countJadwalMagang}}</h3>

              <p>Jadwal Magang</p>
            </div>
            <div class="icon">
              <i class="fas fa-calendar-alt"></i>
            </div>
            <a href="{{ route('jadwalmagang.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $countTugasMagang}}</h3>

              <p>Tugas Magang</p>
            </div>
            <div class="icon">
              <i class="fas fa-clipboard-list"></i>
            </div>
            <a href="{{ route('tugasmagang.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
@endsection