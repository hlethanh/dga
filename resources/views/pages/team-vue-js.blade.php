@extends('layout.template-home')

@section('css')
  
  <link href="{{ URL::to('css/pagination/pagination.css') }}" rel="stylesheet" type="text/css"/>

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


      <div id="vueJs">
        
        <team></team>

      </div>

        <!--div id="team-das" class="row">

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="{{ asset('images/team/440178522.png') }}" alt=""/>
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">Van Houtte</span> Benoit</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">440178522</li>
                  <li class="list-group-item text-center">29/09/1967</li>
                  <li class="list-group-item text-center">CDP</li>
                  <li class="list-group-item text-center">Directeur</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="{{ asset('images/team/445058834.png') }}" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">Purnode</span> Geneviève</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">445058834</li>
                  <li class="list-group-item text-center">30/03/1978</li>
                  <li class="list-group-item text-center">CDP</li>
                  <li class="list-group-item text-center">Dir. Adj</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="{{ asset('images/team/441962413.png') }}" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">Baise</span> Christian</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">441962413</li>
                  <li class="list-group-item text-center">27/08/1966</li>
                  <li class="list-group-item text-center">CP</li>
                  <li class="list-group-item text-center">-</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="{{ asset('images/team/446169987.png') }}" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">Brilot</span> Sébastien</h6>
                <input type="hidden" name="sébastien_brilot" / >
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">446169987</li>
                  <li class="list-group-item text-center">06/06/1975</li>
                  <li class="list-group-item text-center">CP</li>
                  <li class="list-group-item text-center">-</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="{{ asset('images/team/440270771.png') }}" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">N</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">Christiaens</span> Carla</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">440270771</li>
                  <li class="list-group-item text-center">21/12/1977</li>
                  <li class="list-group-item text-center">CP</li>
                  <li class="list-group-item text-center">-</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="{{ asset('images/team/446242840.png') }}" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">Delbrouck</span> Sébastien</h6>
                <input type="hidden" name="sébastien_delbrouck" / >
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">446242840</li>
                  <li class="list-group-item text-center">07/06/1977</li>
                  <li class="list-group-item text-center">CP</li>
                  <li class="list-group-item text-center">HR</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/160x160" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">Le Thanh</span> Hung</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">448376840</li>
                  <li class="list-group-item text-center">20/11/1981</li>
                  <li class="list-group-item text-center">Calog</li>
                  <li class="list-group-item text-center">ICT</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/160x160" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">xxxxxxx</span> xxxxxxxx</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">xxxxxxxxxx</li>
                  <li class="list-group-item text-center">xx/xx/xxxx</li>
                  <li class="list-group-item text-center">xxxxx</li>
                  <li class="list-group-item text-center">xx</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/160x160" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">N</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">xxxxxxx</span> xxxxxxxx</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">xxxxxxxxxx</li>
                  <li class="list-group-item text-center">xx/xx/xxxx</li>
                  <li class="list-group-item text-center">xxxxx</li>
                  <li class="list-group-item text-center">xx</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/160x160" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">xxxxxxx</span> xxxxxxxx</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">xxxxxxxxxx</li>
                  <li class="list-group-item text-center">xx/xx/xxxx</li>
                  <li class="list-group-item text-center">xxxxx</li>
                  <li class="list-group-item text-center">xx</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/160x160" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">N</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">xxxxxxx</span> xxxxxxxx</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">xxxxxxxxxx</li>
                  <li class="list-group-item text-center">xx/xx/xxxx</li>
                  <li class="list-group-item text-center">xxxxx</li>
                  <li class="list-group-item text-center">xx</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/160x160" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">xxxxxxx</span> xxxxxxxx</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">xxxxxxxxxx</li>
                  <li class="list-group-item text-center">xx/xx/xxxx</li>
                  <li class="list-group-item text-center">xxxxx</li>
                  <li class="list-group-item text-center">xx</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/160x160" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">xxxxxxx</span> xxxxxxxx</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">xxxxxxxxxx</li>
                  <li class="list-group-item text-center">xx/xx/xxxx</li>
                  <li class="list-group-item text-center">xxxxx</li>
                  <li class="list-group-item text-center">xx</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/160x160" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">xxxxxxx</span> xxxxxxxx</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">xxxxxxxxxx</li>
                  <li class="list-group-item text-center">xx/xx/xxxx</li>
                  <li class="list-group-item text-center">xxxxx</li>
                  <li class="list-group-item text-center">xx</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/160x160" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">N</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">xxxxxxx</span> xxxxxxxx</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">xxxxxxxxxx</li>
                  <li class="list-group-item text-center">xx/xx/xxxx</li>
                  <li class="list-group-item text-center">xxxxx</li>
                  <li class="list-group-item text-center">xx</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/160x160" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">xxxxxxx</span> xxxxxxxx</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">xxxxxxxxxx</li>
                  <li class="list-group-item text-center">xx/xx/xxxx</li>
                  <li class="list-group-item text-center">xxxxx</li>
                  <li class="list-group-item text-center">xx</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/160x160" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">N</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">xxxxxxx</span> xxxxxxxx</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">xxxxxxxxxx</li>
                  <li class="list-group-item text-center">xx/xx/xxxx</li>
                  <li class="list-group-item text-center">xxxxx</li>
                  <li class="list-group-item text-center">xx</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/160x160" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">xxxxxxx</span> xxxxxxxx</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">xxxxxxxxxx</li>
                  <li class="list-group-item text-center">xx/xx/xxxx</li>
                  <li class="list-group-item text-center">xxxxx</li>
                  <li class="list-group-item text-center">xx</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
            <div class="card h-100">
              <div class="card-body">
                <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/160x160" alt="">
                <div class="card-img-overlay">
                  <h6 class="card-title">F</h6>
                </div>
                <h6 class="card-title text-center"><span class="text-uppercase">xxxxxxx</span> xxxxxxxx</h6>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item text-center">xxxxxxxxxx</li>
                  <li class="list-group-item text-center">xx/xx/xxxx</li>
                  <li class="list-group-item text-center">xxxxx</li>
                  <li class="list-group-item text-center">xx</li>
                </ul>
              </div>
            </div>
          </div>
        </div-->

      <!-- Pagination -->
      <ul id="team-das-pagination" class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>
@endsection

@section('scripts')
    <script src="{{ asset("/js/app.js") }}"></script>
@endsection
