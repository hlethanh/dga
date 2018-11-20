@extends('layout.template-home')

@section('css')
  
  <link href="{{ URL::to('css/pagination/pagination.css') }}" rel="stylesheet" type="text/css"/>

@endsection

@section('content')

    <div class="container top-spacer-custom">
    	<div class="row">
    		<div class="col-sm-6">Word / Excel...</div>
  			<div class="col-sm-6">
  				<embed src="/dga-das/public/docs/Pdf/vN.pdf" width="800px" height="1200em"/>
  			</div>
    	</div>
          
          
          <!-- <img src="http://127.0.0.1/dga-das/public/docs/Pdf/vN.pdf" width="800px" height="600px" /> -->
    </div>
@endsection

@section('scripts')
  <script type="text/javascript" src="{{ URL::to('js/pagination/jquery.twbsPagination.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::to('js/jquery.fcts.js') }}"></script>
  <script type="text/javascript" src="{{ URL::to('js/jquery.main.js') }}"></script>
@endsection
