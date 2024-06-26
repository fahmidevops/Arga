<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Fahmi Blog">
    <meta name="author" content="Miftakhul Fahmi">
    <title>Dashboard Kegiatan Warga</title>
    <link rel="icon" href="{{ url('img/LogoKupu2.png') }}" type="x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  
   
    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/dashboard.css') }}" rel="stylesheet">

    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- Plugin CSS dataTables -->
    <link href="{{ asset('/libs/datatables.net-bs4/css/dataTables.bootstrap4.css') }}" rel="stylesheet">

    {{-- Trix editor --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/trix.css') }}">
    <script type="text/javascript" src="{{ asset('/js/trix.js') }}"></script>
  
    {{-- Menghilahkan fungsi attache di trix editor  --}} 
    <style> 
      trix-toolbar [data-trix-button-group="file-tools"] {
        display: none;
      }
    </style>
  </head>
  <body>
    
@include('dashboard.layouts.header')

<div class="container-fluid">
  <div class="row">
    @include('dashboard.layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('container')
    </main>
  </div>
</div>


    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      
      <script src="{{ asset('/js/dashboard.js') }}"></script>

      <!-- All Jquery -->
    <script src="{{ asset('/libs/jquery/dist/jquery.min.js') }}"></script> 

    <!--This page plugins dataTable -->
    <script src="{{ asset('/libs/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/pages/datatable/custom-datatable.js') }}"></script>
    <script src="{{ asset('/js/pages/datatable/datatable-basic.init.js') }}"></script>
  </body>
</html>
