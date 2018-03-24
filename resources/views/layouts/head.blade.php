<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('htmlheader_title')</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

  <link rel="stylesheet" href="{{ asset('bower_components/font-awesome/css/font-awesome.min.css')}}">

  <link rel="stylesheet" href="{{ asset('bower_components/Ionicons/css/ionicons.min.css')}}">

  <link rel="stylesheet" href="{{ asset('dist/css/AdminLTE.min.css')}}">

  <link rel="stylesheet" href="{{ asset('dist/css/skins/skin-blue.css')}}">

  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>     

  <link href="{{ asset('dist/img/ico.ico')}}" rel="shortcut icon">

  @yield('css-inicio')
  
  <script src="{{ asset('bower_components/jquery/dist/jquery.min.js')}}"></script>

  @yield('script-inicio')

</head>