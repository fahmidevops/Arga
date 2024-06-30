<!DOCTYPE html>
<html>
<head>
    <title>How to Use Fullcalendar in Laravel 8</title>
    
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}" /> --}}

    {{-- bootstrap library  --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    {{-- jquery library --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    {{-- calender library --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
</head>
<body>
  
<div class="container">
    <br />
    <h1 class="text-center text-primary"><u>How to Use Fullcalendar in Laravel 8</u></h1>
    <br />

    <div id="calendar"></div>

</div>
   
<script>

$(document).ready(function() {

  var events = @json($events); //ambil data events dari controller dengan format jsom
  // console.log(events) // cara cek data sudah masuk atau belum dd vardump nya di json cek di inspect element bagian console

  $('#calendar').fullCalendar({
    header: {
      left: 'prev, next today',
      center: 'title',
      right: 'month, agendaWeek, agendaDay'
    },
    events: events, //events: adalah property dari calendar js
    selectable: true,
    // selectHelper: true,
  })
})

</script>
  
</body>
</html>