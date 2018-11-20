@extends('layout.template-home')

@section('css')
  <link href="{{ URL::to('css/map/google.map.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
  <div class="container top-spacer-custom">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Portfolio 4
      <small>Subheading</small>
    </h1>

    <!-- Breadcumb -->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('homepage') }}">Home</a>
      </li>
      <li class="breadcrumb-item active">Portfolio 4</li>
    </ol>

    <div class="row">
        <div class="col-lg-12">
            <div id="map" class="panel-body"></div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->

</div>

@endsection

@section('scripts')
  <script type="text/javascript" src="{{ URL::to('js/map/jquery.google.map.js') }}"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCv4iSH1Q7k5Ksd8SUuzQwqnywBuHrwwGg&callback=initMap"></script>
@endsection
