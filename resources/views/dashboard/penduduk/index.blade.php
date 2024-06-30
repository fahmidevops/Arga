@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Data Warga</h1>
</div>

@if (session()->has('success'))
  <div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="table-responsive col-lg-10">
  <a href="{{ url('/dashboard/penduduk/create') }}" class="btn btn-primary mb-3">Tambah Warga</a>  {{-- create sudah default untuk form tambah data, tidak bisa diganti--}}
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">NIK</th>
        <th scope="col">Nomor KK</th>
        <th scope="col">Nama Warga</th>
        <th scope="col">Tempat Lahir</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Alamat</th>
        <th scope="col">RW</th>
        <th scope="col">RT</th>
        <th scope="col">Agama</th>
        <th scope="col">No Telp</th>
        <th scope="col">Kepala Keluarga</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      {{-- @dd($warga) --}}
      @foreach ($warga as $w)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $w->NIK }}</td>
        <td>{{ $w->KK }}</td>
        <td>{{ $w->nama }}</td>
        <td>{{ $w->tmpt_lahir }}</td>
        <td>{{ $w->tgl_lahir}}</td>
        <td>{{ $w->jk }}</td>
        <td>{{ $w->alamat }}</td>
        <td>{{ $w->RT }}</td>
        <td>{{ $w->RW }}</td>
        <td>{{ $w->Agama }}</td>
        <td>{{ $w->telp }}</td>
        @php
            if ($w->is_kepala_keluarga == 0) {
              $w->is_kepala_keluarga ="";
            } else {
              $w->is_kepala_keluarga ="Kepala Keluarga";
            }
        @endphp
        <td>{{ $w->is_kepala_keluarga }}</td>
        <td>
          <a href="" class="badge bg-info"><span data-feather="eye"></span></a>
          <a href="{{ url('/dashboard/penduduk/' .$w->id . '/edit') }}" class="badge bg-warning"><span data-feather="edit"></span></a>
          {{-- <form action="" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
          </form> --}}
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection


