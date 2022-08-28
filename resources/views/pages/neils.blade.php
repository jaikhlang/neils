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
        <h4 class="">Host Organizing Committee, NEILS11</h4>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img src="{{ asset('images/peoples/director.jpg') }}" class="w-25" alt="CIT Director">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Chief Patron</span>
              <span class="d-block h6 font-weight-bold">Prof. Debkumar Chakrabarty</span>
              <span class="d-block h6 font-normal">Director, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img src="{{ asset('images/peoples/registrar.jpg') }}" class="w-25" alt="CIT Director">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Patron</span>
              <span class="d-block h6 font-weight-bold">Ms. Chaitali Brahma</span>
              <span class="d-block h6 font-normal">Registrar, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img src="{{ asset('images/peoples/hss-tanushree.jpg') }}" class="w-25" alt="CIT Director">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Academic Adviser</span>
              <span class="d-block h6 font-weight-bold">Dr. Tanushree Nayak</span>
              <span class="d-block h6 font-normal mb-0">Assistant Professor, HoD</span>
              <span class="d-block h6 font-normal">Dept. of Humanities & Social Sciences, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img src="{{ asset('images/peoples/phy-sandeep.jpg') }}" class="w-25" alt="CIT Director">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Technical Adviser</span>
              <span class="d-block h6 font-weight-bold">Dr. Sandeep Kumar Srivastava</span>
              <span class="d-block h6 font-normal mb-0">Associate Professor, Dean R&D</span>
              <span class="d-block h6 font-normal">Department of Physics, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img src="{{ asset('images/peoples/hss-bihung.jpg') }}" class="w-25" alt="CIT Director">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Convenor</span>
              <span class="d-block h6 font-weight-bold">Bihung Brahma</span>
              <span class="d-block h6 font-normal mb-0">Assistant Professor,</span>
              <span class="d-block h6 font-normal">Department of Humanities & Social Sciences, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img src="{{ asset('images/peoples/hss-jdh.jpg') }}" class="w-25" alt="CIT Director">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Co-Convenor</span>
              <span class="d-block h6 font-weight-bold">J.D.H. Basumatary</span>
              <span class="d-block h6 font-normal mb-0">Assistant Professor,</span>
              <span class="d-block h6 font-normal">Department of Humanities & Social Sciences, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img class="w-25" src="{{ asset('images/peoples/hss-pradip.jpg') }}" alt="Director CIT Kokrajhar">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Member</span>
              <span class="d-block h6 font-weight-bold">Dr. Pradip Brahmachary</span>
              <span class="d-block h6 font-weight-normal mb-0">Associate Professor<br>Department of Humanities & Social Sciences, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img class="w-25" src="{{ asset('images/peoples/hss-gunajit.jpg') }}" alt="Director CIT Kokrajhar">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Member</span>
              <span class="d-block h6 font-weight-bold">Dr. Gunajit Sarma</span>
              <span class="d-block h6 font-weight-normal mb-0">Assistant Professor<br>Department of Humanities & Social Sciences, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img class="w-25" src="{{ asset('images/peoples/hss-kaushik.jpg') }}" alt="Director CIT Kokrajhar">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Member</span>
              <span class="d-block h6 font-weight-bold">Dr. Kaushik Barman</span>
              <span class="d-block h6 font-weight-normal mb-0">Assistant Professor<br>Department of Humanities & Social Sciences, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img class="w-25" src="{{ asset('images/peoples/hss-monideepa.jpg') }}" alt="Director CIT Kokrajhar">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Member</span>
              <span class="d-block h6 font-weight-bold">Monideepa Brahma</span>
              <span class="d-block h6 font-weight-normal mb-0">Assistant Professor<br>Department of Humanities & Social Sciences, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img class="w-25" src="{{ asset('images/peoples/sangrang.jpg') }}" alt="Director CIT Kokrajhar">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Member</span>
              <span class="d-block h6 font-weight-bold">Dr. Sangrang Brahma</span>
              <span class="d-block h6 font-weight-normal mb-0">Chief Librarian<br>Central Library, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img class="w-25" src="{{ asset('images/peoples/apurbalal.jpg') }}" alt="Director CIT Kokrajhar">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Member</span>
              <span class="d-block h6 font-weight-bold">Dr. Apurbalal Senapati</span>
              <span class="d-block h6 font-weight-normal mb-0">Assistant Professor<br>Dept. of Computer Science & Engineering, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img class="w-25" src="{{ asset('images/peoples/sanjib.jpg') }}" alt="Director CIT Kokrajhar">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Member</span>
              <span class="d-block h6 font-weight-bold">Sanjib Narzary</span>
              <span class="d-block h6 font-weight-normal mb-0">Assistant Professor<br>Dept. of Computer Science & Engineering, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img class="w-25" src="{{ asset('images/peoples/sahalad.jpeg') }}" alt="Director CIT Kokrajhar">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Member</span>
              <span class="d-block h6 font-weight-bold">Dr. Sahalad Borgoyary</span>
              <span class="d-block h6 font-weight-normal mb-0">Assistant Professor<br>Dept. of Mathematics, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img class="w-25" src="{{ asset('images/peoples/jakie.jpg') }}" alt="Director CIT Kokrajhar">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Member</span>
              <span class="d-block h6 font-weight-bold">Jackie Brahma</span>
              <span class="d-block h6 font-weight-normal mb-0">Assistant Professor<br>Dept. of Civil Engineering, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img class="w-25" src="{{ asset('images/peoples/anuck.jpg') }}" alt="Director CIT Kokrajhar">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Member</span>
              <span class="d-block h6 font-weight-bold">Dr. Anuck Islary</span>
              <span class="d-block h6 font-weight-normal mb-0">Assistant Professor<br>Dept. of Food Engineering and Technology, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img class="w-25" src="{{ asset('images/peoples/ie-borat.jpg') }}" alt="Director CIT Kokrajhar">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Member</span>
              <span class="d-block h6 font-weight-bold">Borat Basumatary</span>
              <span class="d-block h6 font-weight-normal mb-0">Assistant Professor<br>Dept. of Instrumentation Engineering, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img class="w-25" src="{{ asset('images/peoples/phy-mahananda.jpg') }}" alt="Director CIT Kokrajhar">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Member</span>
              <span class="d-block h6 font-weight-bold">Mahananda Brahma</span>
              <span class="d-block h6 font-weight-normal mb-0">Assistant Professor<br>Dept. of Physics, CIT Kokrajhar</span>
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
