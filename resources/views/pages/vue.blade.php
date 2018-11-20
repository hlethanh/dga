@extends('layout.template-home')

@section('css')

@endsection

@section('content')

    <div class="container top-spacer-custom">
    	
      <div class="row">

    		<div class="col-sm-6">Vue.js....</div>

    	</div>

      <div class="row">

        <div id="vueJs">
          
          <app></app>

        </div>
        
      </div>

    </div>

@endsection

@section('scripts')

  <script src="{{ asset("/js/app.js") }}"></script>
@endsection
