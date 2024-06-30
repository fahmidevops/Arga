@extends('dashboard.layouts.main')

@section('container')

@if (session()->has('success'))
  <div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Kirim pesan</h1>
</div>

{{-- <div class="col-lg-8">
  <form method="post" action="{{ url('/dashboard/wagw/send') }}" class="mb-5">
    @csrf
    
    <div class="mb-3">
        <label for="nowa" class="form-label">Nomor WA</label> <label class="text-danger fs-5 fw-bold">*</label>
        <input type="text" class="form-control @error('nowa') is-invalid @enderror" id="nowa" name="nowa" value="{{ old('nowa') }}" required autofocus>
        @error('nowa')        
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
    </div> --}}

    {{-- <div class="mb-3">
      <label for="bulan" class="form-label">Bulan</label> <label class="text-danger fs-5 fw-bold">*</label>
      <select class="form-select @error('bulan') is-invalid @enderror" id="bulan" name="bulan" value="{{ old('bulan') }}" required>
        <option selected disabled>--- Silahkan pilih ---</option>
            <option value="Januari">Januari</option>
            <option value="Februari">Februari</option>  
            <option value="Maret">Maret</option>  
            <option value="April">April</option>  
            <option value="Mei">Mei</option>  
            <option value="Juni">Juni</option>  
            <option value="Juli">Juli</option>  
            <option value="Agustus">Agustus</option>  
            <option value="September">September</option>  
            <option value="Oktober">Oktober</option>  
            <option value="November">November</option>  
            <option value="Desember">Desember</option>  
          </select>
      @error('bulan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div> --}}

    {{-- <div class="mb-3">
      <label for="pesan" class="form-label">Pesan</label> <label class="text-danger fs-5 fw-bold">*</label>
      <input type="text" class="form-control @error('pesan') is-invalid @enderror" id="pesan" name="pesan" value="{{ old('pesan') }}" required autofocus>
      @error('pesan')        
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div> --}}

    

{{-- 
    
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ url('/dashboard/iuran/') }}" class="btn btn-warning">Batal</a>


    

  </form>
</div> --}}


{{-- @dd($warga) --}}
<div class="col-lg-8">
  <form method="post" action="{{ url('/dashboard/wagw/sendwarga') }}" class="mb-5">
    @csrf
    <div class="col-lg-4">
      <label for="id" class="form-label">No WA dan Nama Warga</label> <label class="text-danger fs-5 fw-bold"></label>
      <select class="form-select @error('id') is-invalid @enderror" name="id" required>
        <option selected disabled>--- Silahkan pilih ---</option>
        @foreach ($warga as $w)
          @if (old('id') == $w->id)
            <option value="{{ $w->id }}" selected>{{ $w->telp }}</option>
          @else
            <option value="{{ $w->id }}">{{ $w->telp }} | {{ $w->nama }}</option>  
          @endif
        @endforeach       
      </select>
      @error('id')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div><div class="mb-2"></div>

    <button type="submit" class="btn btn-primary">Ingatkan</button>
    {{-- <a href="{{ url('/dashboard/iuran/') }}" class="btn btn-warning">Batal</a> --}}
  </form>
</div>



{{-- @dd($iuran) --}}
<div class="table-responsive col-lg-10">
  {{-- <a href="{{ url('/dashboard/iuran/create') }}" class="btn btn-primary mb-3">Tambah Iuran</a>  create sudah default untuk form tambah data, tidak bisa diganti --}}
  {{-- <a href="{{ url('/dashboard/wagw') }}" class="btn btn-primary mb-3">Ingatkan Warga</a>  create sudah default untuk form tambah data, tidak bisa diganti --}}
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
        <td>{{$i->nominal }}</td>
        <td>{{ $i->bukti_bayar}}</td>
        <td>{{ $i->tgl_bayar }}</td>
        <td>{{ $i->keterangan }}</td>
        @php
            if ($i->status == 0) {
              $i->status ="Belum Lunas";
            }
            @endphp
        <td>{{ $i->status }}</td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection