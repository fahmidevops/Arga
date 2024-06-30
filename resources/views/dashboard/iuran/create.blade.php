@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Tambah Iuran Warga</h1>
</div>


<div class="col-lg-8">
  <form method="post" action="{{ url('/dashboard/iuran') }}" class="mb-5">
    @csrf
    
    <div class="mb-3">
      <label for="penduduk_id" class="form-label">Nama</label> <label class="text-danger fs-5 fw-bold">*</label>
      <select class="form-select @error('penduduk_id') is-invalid @enderror" name="penduduk_id" required>
        <option selected disabled>--- Silahkan pilih ---</option>
        @foreach ($penduduk as $p)
          @if (old('penduduk_id') == $p->id)
            <option value="{{ $p->id }}" selected>{{ $p->nama }}</option>
          @else
            <option value="{{ $p->id }}">{{ $p->nama }}</option>  
          @endif
        @endforeach       
      </select>
      @error('penduduk_id')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="bayar_tahun" class="form-label">Tahun Iuran</label> <label class="text-danger fs-5 fw-bold">*</label>
      <select class="form-select @error('bayar_tahun') is-invalid @enderror" id="bayar_tahun" name="bayar_tahun" value="{{ old('bayar_tahun') }}"required>
        <option selected disabled>--- Silahkan pilih ---</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>  
      </select>
      @error('bayar_tahun')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="bayar_bulan" class="form-label">Bulan Iuran</label> <label class="text-danger fs-5 fw-bold">*</label>
      <select class="form-select @error('bayar_bulan') is-invalid @enderror" id="bayar_bulan" name="bayar_bulan" value="{{ old('bayar_bulan') }}"required>
        <option selected disabled>--- Silahkan pilih ---</option>
            <option value="01">Januari</option>
            <option value="02">Februari</option>  
            <option value="03">Maret</option>  
            <option value="04">April</option>  
            <option value="05">Mei</option>  
            <option value="06">Juni</option>  
            <option value="07">Juli</option>  
            <option value="08">Agustus</option>  
            <option value="09">September</option>  
            <option value="10">Oktober</option>  
            <option value="11">November</option>  
            <option value="12">Desember</option>  
      </select>
      @error('bayar_bulan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>


    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ url('/dashboard/iuran/') }}" class="btn btn-warning">Batal</a>
  </form>
</div>

@endsection