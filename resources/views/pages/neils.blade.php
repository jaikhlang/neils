@extends('layouts.app')
@section('title', 'NEILS 2020')
<!-- Meta Tags  -->
@section('metatags')
<meta name="keywords" content="neils 2020, conference, linguistic conference, neils at cit kokrajhar, north east indian linguistics society, center for linguistics, february conference cit kokrajhar">
<meta name="description" content="NEILS 2020 conference will be held in CIT Kokrajhar BTAD Assam India 783370 in the month of February 2020. The conference will be hosted by Dept. of Humanities and Social Sciences and Center for Linguistics and Cultural Studies, CIT Kokrajhar.">
@endsection

<!-- Custom Styles -->
@section('stylesheets')
  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
  <link rel="stylesheet" href="{{ asset('css/compact-gallery.css')}}">
@endsection

<!-- Contents -->
@section('content')
  <section id="" class="">
    <div class="d-md-flex align-items-center">
      <img src="{{ asset('images/slides/neils12e.jpg') }}" alt="" class="w-full img-fluid">
    </div>

  </section>

  <div id="schedule" class="d-block py-5 border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <!--<h4 class="">Programme Schedule</h4>
          <div class="py-2 mb-4">
            <a href="{{ asset('uploads/programme-schedule.pdf') }}" class="d-inline-block btn btn-danger btn-lg mb-2" target="_blank">Preliminary Schedule of NEILS 11</a>
            <span class="d-block small">Note: Preliminary Schedule of NEILS 11 subject to change.</span>
          </div>
        -->

          <div class="mb-4">
            <h4 class="">Registration Fees</h4>
            <div class="bg-white">
              <table class="table border text-danger">
                <tbody>
                  <tr class="">
                    <td class="px-4 text-nowrap">Rs. 1000</td>
                    <td class="px-4 border-left"><strong>SAARC student without</strong> financial support (please provide evidence such as a letter from the Head of the Department)</td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 text-nowrap">Rs. 2200</td>
                    <td class="px-4 border-left"><strong>SAARC student</strong> with financial support</td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 text-nowrap">Rs. 3200</td>
                    <td class="px-4 border-left"><strong>SAARC non-student</strong> (includes teaching faculty pursuing PhD) or International student</td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 text-nowrap">Rs. 5500</td>
                    <td class="px-4 border-left">International non-student</td>
                  </tr>
                </tbody>
              </table>
            </div>



          </div>

          <div class="mb-4">
            <a href="{{ route('register') }}" class="d-inline-block btn btn-danger btn-lg mb-2">Register for NEILS11</a>
            <a href="{{ route('pages.paper') }}" class="d-inline-block btn btn-outline-danger btn-lg mb-2">Call for Paper</a>
          </div>
        </div>
        <div class="col-md-6">
          <h4 class="">Important Dates</h4>
          <div class="py-2 mb-4">
            <div class="rounded-lg bg-white" id="status">
              <table class="table rounded-lg my-0">
                <tbody>
                  <tr class="cursor-pointer">
                    <td>September 1, 2022</td>
                    <td class="text-danger">Abstract submission deadline.</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>Early October</td>
                    <td>
                      <span class="d-block text-danger">Notification of abstract acceptance.</span>
                    </td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>November 1, 2022</td>
                    <td class="text-danger">Registration opens (For presenters and non-presenters).</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>December 1, 2022</td>
                    <td class="blinkme">Registration closes for presenters.</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>January 15, 2023</td>
                    <td>Registration closes for non-presenters.</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>January 16, 2023</td>
                    <td>Last day to cancel registration.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="organizer" class="py-5 bg-white border-bottom">
    <div class="container">
      <div class="mb-4">
        <h4 class="">Local Organizers, NEILS12</h4>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img src="{{ asset('images/peoples/anita.jpg') }}" class="w-25" alt="Prof. Anita Tamuli">
            <div class="flex-fill ml-4">
              <!-- <span class="d-block h6 font-italic mb-0">Chief Patron</span> -->
              <span class="d-block h6 font-weight-bold">Prof. Anita Tamuli</span>
              <span class="d-block h6 mb-0 font-normal">Retired Professor,</span>
              <span class="d-block h6 font-normal">Department of English Language Teaching,<br>Gauhati University</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img src="{{ asset('images/peoples/jyotiprakash.jpg') }}" class="w-25" alt="Prof. Jyotiprakash Tamuli">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-weight-bold">Prof. Jyotiprakash Tamuli</span>
              <span class="d-block h6 mb-0 font-normal">Department Head, Linguistics</span>
              <span class="d-block h6 font-normal">Gauhati University</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img src="{{ asset('images/peoples/gitanjali.jpg') }}" class="w-25" alt="Dr. Gitanjali Bez">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-weight-bold">Dr. Gitanjali Bez</span>
              <span class="d-block h6 mb-0 font-normal">Assistant Professor</span>
              <span class="d-block h6 font-normal">Department of Linguistics<br>Gauhati University</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img src="{{ asset('images/peoples/krishna.jpg') }}" class="w-25" alt="Dr. Krishna Boro">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-weight-bold">Dr. Krishna Boro</span>
              <span class="d-block h6 mb-0 font-normal">Assistant Professor</span>
              <span class="d-block h6 font-normal">Department of Linguistics<br>Gauhati University</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img src="{{ asset('images/peoples/seuji.jpg') }}" class="w-25" alt="Dr. Seuji Sharma">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-weight-bold">Dr. Seuji Sharma</span>
              <span class="d-block h6 mb-0 font-normal">Assistant Professor</span>
              <span class="d-block h6 font-normal">Department of Linguistics<br>Gauhati University</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <section id="compactgallery" class="gallery-block compact-gallery border-bottom">
      <div class="container">
          <div class="mb-4">
              <h4>Previous NEILS Conferences</h4>
          </div>
          <div class="row no-gutters">
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image7.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image7.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image8.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image8.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image9.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image9.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image10.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image10.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                      </a>
                  </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image11.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image11.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image12.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image12.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image13.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image13.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image6.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image6.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image5.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image5.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
          </div>
      </div>
  </section>
  @include('layouts.partials.footer')
@endsection

<!-- Custom Scripts -->
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
  <script>
      baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
  </script>
@endsection
