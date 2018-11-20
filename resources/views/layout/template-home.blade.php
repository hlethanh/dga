<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Intranet - DAS</title>

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link href="{{ URL::to('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Custom styles for this template -->
    <link href="{{ URL::to('css/template/modern-business.css') }}" rel="stylesheet" type="text/css"/>
    <!-- Custom styles for the site -->
    <link href="{{ URL::to('css/styles.css') }}" rel="stylesheet" type="text/css"/>
    
    @yield('css')

  </head>

  <body>

    <!-- Navigation -->
    @include('common.nav')

    <!-- Page Content -->
    @yield('content')
    
    <!-- Footer -->
    @include('common.footer')

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ URL::to('js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    @yield('scripts')
  </body>

</html>
