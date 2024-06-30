@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah Warga</h1>
</div>

<div class="col-lg-8">
  <form method="post" action="{{ url('/dashboard/penduduk') }}" class="mb-5">
    @csrf
    <div class="mb-3">
      <label for="is_kepala_keluarga" class="form-label">Apakah Anda Kepala Keluarga?</label> <label class="text-danger fs-5 fw-bold">*</label>
      <select class="form-select @error('is_kepala_keluarga') is-invalid @enderror" id="is_kepala_keluarga" name="is_kepala_keluarga" value="{{ old('is_kepala_keluarga') }}"required>
        <option selected disabled>--- Silahkan pilih ---</option>
            <option value="1">Ya</option>
            <option value="0">Tidak</option>  
      </select>
      @error('is_kepala_keluarga')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="KK" class="form-label">Nomor KK</label> <label class="text-danger fs-5 fw-bold">*</label>
      <input type="text" class="form-control @error('KK') is-invalid @enderror" id="KK" name="KK" value="{{ old('KK') }}" required autofocus>
      @error('KK')        
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="NIK" class="form-label">NIK</label> <label class="text-danger fs-5 fw-bold">*</label>
      <input type="text" class="form-control @error('NIK') is-invalid @enderror" id="NIK" name="NIK" value="{{ old('NIK') }}" required autofocus>
      @error('NIK')        
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label> <label class="text-danger fs-5 fw-bold">*</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
      @error('nama')        
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="tmpt_lahir" class="form-label">Tempat Lahir</label> <label class="text-danger fs-5 fw-bold">*</label>
      <input type="text" class="form-control @error('tmpt_lahir') is-invalid @enderror" id="tmpt_lahir" name="tmpt_lahir" value="{{ old('tmpt_lahir') }}" required>
      @error('tmpt_lahir')        
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="date" class="form-label">Tanggal Lahir</label> <label class="text-danger fs-5 fw-bold">*</label>
      <input type="date"  class="form-control @error('tgl_lahir') is-invalid @enderror" id="tgl_lahir" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required>
      {{-- <input class="form-control datepicker" name="tanggal_awal" id="input-tanggal-awal" placeholder="Tanggal Awal" type="text" data-date-format="dd-mm-yyyy" value="{{ old('tanggal_awal', now()->format('d-m-Y')) }}"> --}}
      @error('tgl_lahir')        
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="jk" class="form-label">Jenis Kelamin</label> <label class="text-danger fs-5 fw-bold">*</label>
      <select class="form-select @error('jk') is-invalid @enderror" id="jk" name="jk" value="{{ old('jk') }}"required>
        <option selected disabled>--- Silahkan pilih ---</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>  
      </select>
      @error('jk')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="alamat" class="form-label">Alamat</label> <label class="text-danger fs-5 fw-bold">*</label>
      <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}" required>
      @error('alamat')        
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="RT" class="form-label">RT</label> <label class="text-danger fs-5 fw-bold">*</label>
      <select class="form-select @error('RT') is-invalid @enderror" id="RT" name="RT" value="{{ old('RT') }}" required>
        <option selected disabled>--- Silahkan pilih ---</option>
            <option value="001">001</option>
            <option value="002">002</option>  
      </select>
      @error('RT')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="RW" class="form-label">RW</label> <label class="text-danger fs-5 fw-bold">*</label>
      <select class="form-select @error('RW') is-invalid @enderror" id="RW" name="RW" value="{{ old('RW') }}" required>
        <option selected disabled>--- Silahkan pilih ---</option>
            <option value="01">01</option>
            <option value="02">02</option>  
      </select>
      @error('RW')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="agama" class="form-label">Agama</label>
      <select class="form-select @error('agama') is-invalid @enderror" id="agama" name="agama" value="{{ old('agama') }}"required>
        <option selected disabled>--- Silahkan pilih ---</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>  
            <option value="Hindu">Hindu</option>  
            <option value="Budha">Budha</option>  
            <option value="Lainnya">Lainnya</option>  
      </select>
      @error('agama')        
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="telp" class="form-label">No Telp / WA</label>
      <input type="text" class="form-control @error('telp') is-invalid @enderror" id="telp" name="telp" value="{{ old('telp') }}">
      @error('telp')        
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    {{-- <div class="mb-3">
      <label for="komponen_id" class="form-label">komponen</label> <label class="text-danger fs-5 fw-bold">*</label>
      <select class="form-select @error('komponen_id') is-invalid @enderror" name="komponen_id" required>
        <option selected disabled>--- Silahkan pilih ---</option>
        @foreach ($komponens as $komponen)
          @if (old('komponen_id') == $komponen->name)
            <option value="{{ $komponen->id }}" selected>{{ $komponen->name }}</option>
          @else
            <option value="{{ $komponen->id }}">{{ $komponen->name }}</option>  
          @endif
        @endforeach        
        
      </select>
      @error('komponen_id')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div> --}}

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ url('/dashboard/penduduk/') }}" class="btn btn-warning">Batal</a>
  </form>
</div>

@endsection