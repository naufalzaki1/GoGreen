<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GOGREEN</title>
  <link rel="icon" href="{{asset('assets/images/favicon.ico')}}" type="image/x-icon" />
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
</head>
<body class="page-wrapper">
  @include('layouts.header')
  @yield('title')
  @yield('content')
  @include('layouts.footer')
  @include('helper.js')
</body>
</html>