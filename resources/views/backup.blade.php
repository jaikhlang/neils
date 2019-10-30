@extends('layouts.app')

<!-- Meta Tags  -->
@section('metatags')

@endsection

<!-- Custom Styles -->
@section('stylesheets')
  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection

<!-- Contents -->
@section('content')
  <section id="carousel" class="absolute-lg position-top-lg index-m-1">
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ url('https://dummyimage.com/1300x500/091a01/fff.jpg&text=Gearup+for+Linguistics+Conference') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ url('https://dummyimage.com/1300x500/091a01/fff.jpg&text=Register+before+December') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ url('https://dummyimage.com/1300x500/091a01/fff.jpg&text=Accomodation+booking+available') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          {{-- <span class="carousel-control-prev-icon" aria-hidden="true"></span> --}}
          <i style="font-size: 36px" class="material-icons">chevron_left</i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          {{-- <span class="carousel-control-next-icon" aria-hidden="true"></span> --}}
          <i style="font-size: 36px" class="material-icons">chevron_right</i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="d-block py-5 border-bottom border-light">
      <div class="container">
        <div class="d-flex justify-content-center">
          <a href="" class="d-inline-block btn btn-primary btn-lg px-4 py-2 mx-2 text-decoration-none">Registration</a>
          <a href="" class="d-inline-block btn btn-primary btn-lg px-4 py-2 mx-2 text-decoration-none">Accomodation</a>
          <a href="" class="d-inline-block btn btn-dark btn-lg px-4 py-2 mx-2 text-decoration-none">Paper Status</a>
          <a href="" class="d-inline-block btn btn-danger btn-lg px-4 py-2 mx-2 text-decoration-none">NEILS11 Call for Paper</a>
        </div>
      </div>
    </div>

    <div class="bg-white d-block py-5 border-bottom border-light">
      <div class="container">
        <div class="d-block">
           <div class="neils-head text-center">
             <h2 class="font-weight-bold">NEILS 11 CONFERENCE 2020</h2>
             <span class="d-block text-uppercase">Will be held in Central Institute of Technology Kokrajhar</span>
             <span class="d-block text-uppercase">from 7th to 9th february 2020</span>
           </div>
        </div>
      </div>
    </div>

    <div class="bg-white d-block py-5 border-bottom border-light">
      <div class="container">
        <div class="d-block">
          <h4 class="text-center">Who's Speaking?</h4>

          <div class="d-block position-relative">
            <div class="d-flex flex-nowrap requireScroll position-relative">
              <a href="#!" class="d-block pr-3 py-3 text-decoration-none">
                <img src="{{ asset('/images/speaker.jpg') }}" alt="">
                <span class="d-block text-black-50">1Jasmine Rosy</span>
                <span class="d-block text-black-50">Professor of Linguistics</span>
                <span class="d-block text-black-50">University of Australia</span>
              </a>

              <a href="#!" class="d-block px-3 py-3 text-decoration-none">
                <img src="{{ asset('/images/speaker1.jpg') }}" alt="">
                <span class="d-block text-black-50">2Jasmine Rosy</span>
                <span class="d-block text-black-50">Professor of Linguistics</span>
                <span class="d-block text-black-50">University of Australia</span>
              </a>
              <a href="#!" class="d-block px-3 py-3 text-decoration-none">
                <img src="{{ asset('/images/speaker1.jpg') }}" alt="">
                <span class="d-block text-black-50">3Jasmine Rosy</span>
                <span class="d-block text-black-50">Professor of Linguistics</span>
                <span class="d-block text-black-50">University of Australia</span>
              </a>

              <a href="#!" class="d-block px-3 py-3 text-decoration-none">
                <img src="{{ asset('/images/speaker1.jpg') }}" alt="">
                <span class="d-block text-black-50">4Jasmine Rosy</span>
                <span class="d-block text-black-50">Professor of Linguistics</span>
                <span class="d-block text-black-50">University of Australia</span>
              </a>

              <a href="#!" class="d-block px-3 py-3 text-decoration-none">
                <img src="{{ asset('/images/speaker2.jpg') }}" alt="">
                <span class="d-block text-black-50">5Jasmine Rosy</span>
                <span class="d-block text-black-50">Professor of Linguistics</span>
                <span class="d-block text-black-50">University of Australia</span>
              </a>

              <a href="#!" class="d-block px-3 py-3 text-decoration-none">
                <img src="{{ asset('/images/speaker1.jpg') }}" alt="">
                <span class="d-block text-black-50">6Jasmine Rosy</span>
                <span class="d-block text-black-50">Professor of Linguistics</span>
                <span class="d-block text-black-50">University of Australia</span>
              </a>

              <a href="#!" class="d-block px-3 py-3 text-decoration-none">
                <img src="{{ asset('/images/speaker2.jpg') }}" alt="">
                <span class="d-block text-black-50">7Jasmine Rosy</span>
                <span class="d-block text-black-50">Professor of Linguistics</span>
                <span class="d-block text-black-50">University of Australia</span>
              </a>

              <a href="#!" class="d-block px-3 py-3 text-decoration-none">
                <img src="{{ asset('/images/speaker1.jpg') }}" alt="">
                <span class="d-block text-black-50">8Jasmine Rosy</span>
                <span class="d-block text-black-50">Professor of Linguistics</span>
                <span class="d-block text-black-50">University of Australia</span>
              </a>

              <a href="#!" class="d-block px-3 py-3 text-decoration-none">
                <img src="{{ asset('/images/speaker2.jpg') }}" alt="">
                <span class="d-block text-black-50">9Jasmine Rosy</span>
                <span class="d-block text-black-50">Professor of Linguistics</span>
                <span class="d-block text-black-50">University of Australia</span>
              </a>

              <a href="#!" class="d-block px-3 py-3 text-decoration-none">
                <img src="{{ asset('/images/speaker1.jpg') }}" alt="">
                <span class="d-block text-black-50">10Jasmine Rosy</span>
                <span class="d-block text-black-50">Professor of Linguistics</span>
                <span class="d-block text-black-50">University of Australia</span>
              </a>

              <a href="#!" class="d-block px-3 py-3 text-decoration-none">
                <img src="{{ asset('/images/speaker1.jpg') }}" alt="">
                <span class="d-block text-black-50">11Jasmine Rosy</span>
                <span class="d-block text-black-50">Professor of Linguistics</span>
                <span class="d-block text-black-50">University of Australia</span>
              </a>

              <a href="#!" class="d-block px-3 py-3 text-decoration-none">
                <img src="{{ asset('/images/speaker2.jpg') }}" alt="">
                <span class="d-block text-black-50">12Jasmine Rosy</span>
                <span class="d-block text-black-50">Professor of Linguistics</span>
                <span class="d-block text-black-50">University of Australia</span>
              </a>

              <a href="#!" class="d-block pl-3 py-3 text-decoration-none">
                <img src="{{ asset('/images/speaker3.jpg') }}" alt="">
                <span class="d-block text-black-50">13Jasmine Rosy</span>
                <span class="d-block text-black-50">Professor of Linguistics</span>
                <span class="d-block text-black-50">University of Australia</span>
              </a>
            </div>
            <a href="#!" class="nextScroll position-absolute px-2 py-2 bg-white rounded-lg shadow-sm d-inline-block align-middle"><i class="material-icons align-middle">chevron_right</i></a>
          </div>
        </div>
      </div>
    </div>

    <div id="schedule" class="bg-white d-block py-5 border-bottom border-light">
      <div class="container">
        <div class="d-block">
          <h4 class="text-center">Event Timeline</h4>

          <div class="py-3">
            <h5>Saturday, 10 December 2019</h5>
            <table class="table bg-light border border-light table-hover">
              <thead>
                <tr class="cursor-pointer">
                  <th scope="col">#</th>
                  <th scope="col">SESSION</th>
                  <th scope="col">SPEAKER</th>
                  <th scope="col">TIME</th>
                  <th scope="col">VENUE</th>
                </tr>
              </thead>
              <tbody>
                <tr class="cursor-pointer">
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>11.00AM</td>
                  <td>@mdo</td>
                </tr>
                <tr class="cursor-pointer">
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>12.00AM</td>
                  <td>@fat</td>
                </tr>
                <tr class="cursor-pointer">
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>01.00PM</td>
                  <td>@twitter</td>
                </tr>
                <tr class="cursor-pointer">
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>01.00PM</td>
                  <td>@twitter</td>
                </tr>
                <tr class="cursor-pointer">
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>01.00PM</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
            <a href="#" class="d-block-inline text-decoration-none text-center">Get Programme Schedules</a>
          </div>
        </div>
      </div>
    </div>

    <div id="fees" class="d-block py-5" style="background: url({{ asset('images/fees-bg.jpg') }}); background-repeat: no-repeat; background-size: cover;">
      <div class="container">
        <h4 class="text-center text-white">Registration Fee</h4>
        <div class="d-flex justify-content-between align-self-center text-white py-3">
          <div class="flex-item px-3 py-3 border-right border-black-50">
            <span class="d-block font-weight-bold">700 INR/Participant</span>
            <span class="d-block">SAARC student without financial support (please provide evidence such as a letter from the Head of the Department)</span>
          </div>
          <div class="flex-item px-3 py-3 border-right border-black-50">
            <span class="d-block font-weight-bold">1800 INR/Participant</span>
            <span class="d-block">SAARC student with financial support</span>
          </div>
          <div class="flex-item px-3 py-3 border-right border-black-50">
            <span class="d-block font-weight-bold">2500 INR/Participant</span> Student Foreigner
            <span class="d-block">SAARC non-student (includes teaching faculty pursuing PhD) or International student</span>
          </div>
          <div class="flex-item px-3 py-3">
            <span class="d-block font-weight-bold">4500 INR/Participant</span> Student Foreigner
            <span class="d-block">International non-student</span>
          </div>
        </div>
      </div>
    </div>

    <div id="map" class="d-block py-5 bg-white border-bottom">
      <div class="container">
        <h4 class="text-center">Travel Information</h4>
        <div class="d-flex justify-content-between py-3">
          <div class="text-center">
            <img src="{{ asset('images/map.png') }}" alt="">
            <h4 class="d-block font-weight-regular py-2">Venue</h4>
            <span class="d-block font-weight-regular px-4">Central Institute of Technology Kokrajhar BTAD Assam India 783370</span>
          </div>

          <div class="text-center">
            <img src="{{ asset('images/flight.png') }}" alt="">
            <h4 class="d-block font-weight-regular py-2">Transport</h4>
            <span class="d-block font-weight-regular px-4">Central Institute of Technology Kokrajhar BTAD Assam India 783370</span>
          </div>

          <div class="text-center">
            <img src="{{ asset('images/hotel.png') }}" alt="">
            <h4 class="d-block font-weight-regular py-2">Accomodation</h4>
            <span class="d-block font-weight-regular px-4">Central Institute of Technology Kokrajhar BTAD Assam India 783370</span>
          </div>
        </div>
      </div>
    </div>

    <div id="organiser" class="organiser py-5 d-block bg-light">
      <div class="container">
        <div class="d-flex justify-content-center">
          <a href="#" class="d-block text-decoration-none flex-item px-2 py-2">
            <img src="{{ asset('images/logo1.jpg') }}" alt="">
          </a>
          <a href="#" class="d-block text-decoration-none flex-item px-2 py-2">
            <img src="{{ asset('images/logo2.jpg') }}" alt="">
          </a>
          <a href="#" class="d-block text-decoration-none flex-item px-2 py-2">
            <img src="{{ asset('images/logo3.jpg') }}" alt="">
          </a>
          <a href="#" class="d-block text-decoration-none flex-item px-2 py-2">
            <img src="{{ asset('images/logo4.jpg') }}" alt="">
          </a>
        </div>
      </div>
    </div>
    @include('layouts.partials.footer')
  </section>
@endsection

<!-- Custom Scripts -->
@section('scripts')

@endsection
