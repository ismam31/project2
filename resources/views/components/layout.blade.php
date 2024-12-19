<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Warung Tikungan</title>
        <!-- AdminLTE App -->
        <link rel="stylesheet" href="{{asset('assets/dist/css/adminlte.min.css')}}">
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}"/>
<<<<<<< HEAD
        <!-- Sweetalert -->
        <link rel="stylesheet" href="{{asset('assets/plugins/sweetalert2/sweetalert2.min.css')}}"/>
=======
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

>>>>>>> 008b90d388072ec508431ad632cce0431a3d1223
    </head>

    <body> 
        <x-navbar></x-navbar>
        {{$slot}}
        <!-- jQuery -->
        <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Sweetalert -->
        <script src="{{asset('assets/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
        <script src="{{asset('assets/plugins/flot/jquery.flot.js')}}"></script>
        <script src="{{asset('assets/plugins/flot/plugins/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('assets/plugins/flot/jquery.flot.pie.js')}}"></script>
        @stack('js')
    </body>
</html>
