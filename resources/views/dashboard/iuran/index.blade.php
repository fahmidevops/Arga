@extends('dashboard.layouts.main')

@section('container')


@if (session()->has('success'))
  <div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
  </div>
@endif


@if (!auth()->user()->is_admin)
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Iuran {{ auth()->user()->name }}</h1>
  </div>
  <div class="table-responsive col-lg-10">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tahun</th>
          <th scope="col">Bulan</th>
          <th scope="col">Nominal</th>
          <th scope="col">Bukti Bayar</th>
          <th scope="col">Tanggal Bayar</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        {{-- @dd($iuran) --}}
        @foreach ($iuran_pribadi as $ip)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $ip->bayar_tahun }}</td>
          <td>
            @php
                $bulan = $ip->bayar_bulan ;
                $bulanList = array(
                    '01' => 'Januari', 
                    '02' => 'Februari', 
                    '03' => 'Maret', 
                    '04' => 'April', 
                    '05' => 'Mei', 
                    '06' => 'Juni', 
                    '07' => 'Juli', 
                    '08' => 'Agustus', 
                    '09' => 'September', 
                    '10' => 'Oktober', 
                    '11' => 'November', 
                    '12' => 'Desember'); 
            @endphp
            {{ $bulanList[$bulan] }}
          </td>
          <td>{{ $ip->nominal }}</td>
          <td>{{ $ip->bukti_bayar}}</td>
          <td>{{ $ip->tgl_bayar }}</td>
          <td>{{ $ip->keterangan }}</td>
          @php
              if ($ip->status == 1) {
                $ip->status ="Lunas";
              } else {
                $ip->status ='';
              }
              @endphp
          <td>{{ $ip->status }}</td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endif


{{-- @dd($iuran) --}}
@can('admin')  
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data Iuran Warga</h1>
  </div>
  <div class="table-responsive col-lg-10">
    <a href="{{ url('/dashboard/iuran/create') }}" class="btn btn-primary mb-3">Tambah Iuran</a>  {{-- create sudah default untuk form tambah data, tidak bisa diganti--}}
    {{-- <a href="#">ingatkan warga</a> --}}
    <a href="{{ url('/dashboard/wagw') }}" class="btn btn-primary mb-3">Ingatkan Warga</a>  
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama Warga</th>
          <th scope="col">No WA</th>
          <th scope="col">Tahun</th>
          <th scope="col">Bulan</th>
          <th scope="col">Nominal</th>
          <th scope="col">Bukti Bayar</th>
          <th scope="col">Tanggal Bayar</th>
          <th scope="col">Keterangan</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        {{-- @dd($iuran) --}}
        @foreach ($iuran as $i)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $i->penduduk->nama }}</td>
          <td>{{ $i->penduduk->telp }}</td>
          <td>{{ $i->bayar_tahun }}</td>
          <td>
            @php
                $bulan = $i->bayar_bulan ;
                $bulanList = array(
                    '01' => 'Januari', 
                    '02' => 'Februari', 
                    '03' => 'Maret', 
                    '04' => 'April', 
                    '05' => 'Mei', 
                    '06' => 'Juni', 
                    '07' => 'Juli', 
                    '08' => 'Agustus', 
                    '09' => 'September', 
                    '10' => 'Oktober', 
                    '11' => 'November', 
                    '12' => 'Desember'); 
            @endphp
            {{ $bulanList[$bulan] }}
          </td>
          <td>{{ $i->nominal }}</td>
          <td>{{ $i->bukti_bayar}}</td>
          <td>{{ $i->tgl_bayar }}</td>
          <td>{{ $i->keterangan }}</td>
          @php
              if ($i->status == 1) {
                $i->status ="Lunas";
              } else {
                $i->status ='';
              }
              @endphp
          <td>{{ $i->status }}</td>
          <td>
            <a href="{{ url('/dashboard/iuran/' .$i->id . '/edit') }}" class="badge bg-warning" ><span data-feather="edit"></span> Bayar </a>
            {{-- <a href="{{ url('/dashboard/staff/' .$s->id. '') }}" class="badge bg-info"><span data-feather="eye"></span></a> --}}
            {{-- <form action="{{ url('/dashboard/staff/' . $s->id) }}" method="post" class="d-inline">
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
  @endcan
@endsection


