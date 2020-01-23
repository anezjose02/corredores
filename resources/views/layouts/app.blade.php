<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Scripts -->
  <script src="{{ asset('/js/app.js') }}"></script> 

  <!-- Page level plugin CSS-->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rating/1.5.0/bootstrap-rating.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js"></script>
  
  <!-- Custom styles for this template-->
  <link href="{{ asset('css/admin/sb-admin.css') }}" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="./vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="./vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="./css/app.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/bootstrap-slider.min.css" rel="stylesheet">

</head>

<body>
      @if (!Request::is('login') && !Request::is('register'))
        @include('partial.navbar')
      @endif
      
      
      
      @yield('content')


      @if (!Request::is('login') && !Request::is('register'))
        @include('partial.footer')
      @endif

 
     <!-- Bootstrap core JavaScript -->
     <script src="./vendor/jquery/jquery.min.js"></script>
     <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    
      <!-- Core plugin JavaScript-->
      <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>
    
      <!-- Page level plugin JavaScript-->
      <script src="./vendor/chart.js/Chart.min.js"></script>
      <script src="./vendor/datatables/jquery.dataTables.js"></script>
      <script src="./vendor/datatables/dataTables.bootstrap4.js"></script>
    
      <!-- Custom scripts for all pages-->
      <script src="./js/admin/sb-admin.js"></script>
    
      <!-- Demo scripts for this page-->
      <script src="./js/admin/demo/datatables-demo.js"></script>
      <script src="./js/admin/demo/chart-area-demo.js"></script>

      <!-- Demo scripts for this page-->
     <script src="./js/admin/demo/chart-bar-demo.js"></script>
     <script src="./js/admin/demo/chart-pie-demo.js"></script>

     <script src="./js/bootstrap-slider.min.js"></script>
   

    
 
    
    </body>
    
    </html>
    