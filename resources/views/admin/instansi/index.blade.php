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
        <a href="{{ route('instansi.create') }}" class="float-right btn btn-success">Tambah Instansi</a>
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
                <table id="example1" class="table table-bordered table-hover dataTable dtr-inline"
                            aria-describedby="example1">
                            <thead>
                                <tr class="btn-primary">
                                    <th class="text-center" scope="col">Nama Instansi</th>
                                    <th class="text-center" scope="col">Alamat</th>
                                    <th class="text-center" scope="col">No Telepon</th>
                                    <th class="text-center" scope="col">Aksi</th>
                                </tr>
                            </thead>
                    <tbody>
                    @foreach ($instansis as $instansi)
                      <tr>
                        <td class="text-center">{{ $instansi->nama_instansi}}</td>
                        <td class="text-center">{{ $instansi->alamat}}</td>
                         <td class="text-center">{{ $instansi->no_telepon}}</td>
                        <td class="text-center">
                        <div class="d-flex justify-content-center">
                        <a href="{{ route('instansi.edit',$instansi->id) }}" class="btn btn-sm btn-warning mx-1"><i class="fa fa-edit"></i> Edit</a>
                        <form method="POST" action="{{ route('instansi.destroy',$instansi->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('yakin hapus data ini?')" class="btn btn-sm btn-danger">Hapus</button>
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
