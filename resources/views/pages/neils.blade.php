@extends('layouts.app')
@section('title', 'NEILS11 Conference 2020')
<!-- Meta Tags  -->
@section('metatags')

@endsection

<!-- Custom Styles -->
@section('stylesheets')
  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  <link rel="stylesheet" href="{{ asset('css/compact-gallery.css')}}">
  <style media="screen">
    /* #showcase{
      background-image: url('{{ asset('svg/hero-area.svg') }}');
      background-position: bottom;
      background-repeat: no-repeat;
      background-size: 100%;
    } */
  </style>
@endsection

<!-- Contents -->
@section('content')
  <section id="showcase" class="border-top border-bottom border-light">
    <div class="container">
      <div class="d-md-flex align-items-center">
        <div class="mb-4 text-md-right text-center w-100 px-2 border-right">
          <h1 class="font-weight-bold"><img src="{{ asset('images/logo.png') }}" class="img-fluid" style="height: 60px;" alt=""> CONFERENCE 2020<span class="d-inline-block font-weight-regular h4"></span></h1>
          <h4 class="font-weight-regular text-light"><span class="d-block h5">11th International Conference of the</span> <span class="d-block h2">North East Indian Linguistics Society</span> <span class="d-block h6">February 7<sup>th</sup>, 8<sup>th</sup> &amp; 9<sup>th</sup> 2020</span></h4>
        </div>
        <div class="text-md-left text-center flex-shrink-1 px-2">
          <div class=" text-dark-50">
            <h6 class="text-light mx-0 my-0"><span class="d-block font-weight-regular">Venue:</span>
              <span class="d-block h6">
                <a href="{{ url('//cit.ac.in') }}" class="text-decoration-none text-light" target="_blank">Central Institute of Technology Kokrajhar, BTAD Assam, India 783370</a>
              </span>
            </h6>
          </div>
          <div class="">
            <h6 class="text-light mx-0 my-0"><span class="d-block font-weight-regular">Hosted By:</span>
              <span class="d-block h6">
                <a href="{{ url('http://www.cit.ac.in/departments/hss/academic') }}" class="text-decoration-none text-light" target="_blank">Department of Humanities & Social Sciences & </a>
                <a href="{{ url('http://www.cit.ac.in/center-for-linguistics-and-cultural-studies') }}" class="text-decoration-none text-light" target="_blank">Center for Linguistics and Cultural Studies, CIT Kokrajhar</a>
              </span>
            </h6>
          </div>
        </div>
      </div>

      <div class="d-block text-center">
        <a href="{{ route('register') }}" class="d-inline-block btn btn-outline-danger btn-lg">Register for NEILS11</a>
      </div>
    </div>
  </section>

  <div id="schedule" class="d-block py-5 border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h4 class="">Programme Schedule</h4>
          <div class="py-2">
            <div class="rounded-lg border bg-white shadow">
              <div class="">
                <ul class="d-flex list-unstyled align-items-center text-decoration-none bg-danger rounded-top my-0">
                  <li v-on:click="showSchedule('one')" class="flex-fill" style="border-radius: 0.25rem 0rem 0rem 0rem;" :class="activelist1"><span class="d-block px-2 py-2 text-center">Day One</span></li>
                  <li v-on:click="showSchedule('two')" class="flex-fill " :class="activelist2"><span class="d-block px-2 py-2 text-center">Day Two</span></li>
                  <li v-on:click="showSchedule('three')" class="flex-fill" style="border-radius: 0rem 0.25rem 0rem 0rem;" :class="activelist3"><span class="d-block px-2 py-2 text-center">Day Three</span></li>
                </ul>
              </div>
              <table v-if="dayone" class="table table-hover rounded-lg my-0">
                <tbody>
                  <tr class="cursor-pointer">
                    <td>08:30-09:30</td>
                    <td>Registration</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>09:30-10.30</td>
                    <td class="">Opening addresses.</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>10:30-11:00</td>
                    <td>Vote of thanks and tea break.</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>11:00-11:30</td>
                    <td>Session 1 (30 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>11:30-12:00</td>
                    <td>Session 1 (30 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>12:00-12:30</td>
                    <td>Session 1 (30 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>12:30-01:30</td>
                    <td>Lunch</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>01:30-02:30</td>
                    <td>Session 2 (20 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>02:30-03:00</td>
                    <td>Session 2 (20 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>03:00-03:30</td>
                    <td>Tea break</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>03:30-04:00</td>
                    <td>Poster session</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>04:00-04:30</td>
                    <td>Poster session</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>04:30-05:00</td>
                    <td>Poster session</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>05:00-06:00</td>
                    <td>Documentary screening</td>
                  </tr>
                </tbody>
              </table>

              <table v-if="daytwo" class="table table-hover rounded-lg my-0">
                <tbody>
                  <tr class="cursor-pointer">
                    <td>09:00-09.30</td>
                    <td class="">Session 3 (30 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>09:30-10:00</td>
                    <td class="">Session 3 (30 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>10:00-10:30</td>
                    <td class="">Session 3 (30 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>10:30-11:00</td>
                    <td>Tea break</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>11:00-11:30</td>
                    <td>Session 4 (30 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>11:30-12:00</td>
                    <td>Session 4 (30 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>12:00-12:30</td>
                    <td>Session 4 (30 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>12:30-01:30</td>
                    <td>Lunch</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>01:30-03:00</td>
                    <td>Session 5 (4x20 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>03:00-03:30</td>
                    <td>Tea break</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>03:30-05:00</td>
                    <td>Session 6 (4x20 minutes)</td>
                  </tr>
                </tbody>
              </table>

              <table v-if="daythree" class="table table-hover rounded-lg my-0">
                <tbody>
                  <tr class="cursor-pointer">
                    <td>09:00-09.30</td>
                    <td class="">Session 7 (30 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>09:30-10:00</td>
                    <td class="">Session 7 (30 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>10:00-10:30</td>
                    <td class="">Session 7 (30 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>10:30-11:00</td>
                    <td>Tea break</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>11:00-12:30</td>
                    <td>Session 8 (4x20 minutes)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>12:30-01:30</td>
                    <td>Lunch</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>01:30-03:00</td>
                    <td>Workshop 1 (1.5 hours)</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>03:00-03:30</td>
                    <td>Tea break</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>03:30-05:00</td>
                    <td>Workshop 2 (1.5 hours)</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h4 class="">Important Dates</h4>
          <div class="py-2 mb-4">
            <div class="rounded-lg border bg-white shadow" id="status">
              <table class="table table-hover rounded-lg my-0">
                <tbody>
                  <tr class="cursor-pointer">
                    <td>September 1, 2019</td>
                    <td class="text-danger">(Extended till September 10, 2019): Abstract submission deadline.</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>Early October</td>
                    <td>
                      <span class="d-block text-danger">Notification of abstract acceptance.</span>
                      <span class="d-block blinkme text-success">Notification of abstract acceptance has been sent to your email. Please check.</span>
                    </td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>November 1, 2019</td>
                    <td>Registration opens (For presenters and non-presenters).</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>December 1, 2019</td>
                    <td>Registration closes for presenters.</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>January 15, 2020</td>
                    <td>Registration closes for non-presenters.</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>January 16, 2020</td>
                    <td>Last day to cancel registration.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="mb-4">
            <a href="{{ route('register') }}" class="d-inline-block btn btn-danger btn-lg">Register for NEILS11</a>
            <a href="{{ route('pages.paper') }}" class="d-inline-block btn btn-outline-danger btn-lg">Call for Paper</a>
          </div>

          <div class="mb-4">
            <h4 class="">Registration Fees</h4>
            <div class="bg-white">
              <table class="table border text-danger">
                <tbody>
                  <tr class="">
                    <td class="px-4 text-nowrap">Rs. 700</td>
                    <td class="px-4 border-left">SAARC student without financial support (please provide evidence such as a letter from the Head of the Department)</td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 text-nowrap">Rs. 1800</td>
                    <td class="px-4 border-left">SAARC student with financial support</td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 text-nowrap">Rs. 2500</td>
                    <td class="px-4 border-left">SAARC non-student (includes teaching faculty pursuing PhD) or International student</td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 text-nowrap">Rs. 4500</td>
                    <td class="px-4 border-left">International non-student</td>
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
              <span class="d-block h6 font-normal mb-0">Assistant Professor,</span>
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
              <span class="d-block h6 font-normal mb-0">Associate Professor,</span>
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
              <span class="d-block h6 font-weight-bold">Gunajit Sarma</span>
              <span class="d-block h6 font-weight-normal mb-0">Assistant Professor<br>Department of Humanities & Social Sciences, CIT Kokrajhar</span>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="d-flex justify-content-between align-items-center w-100 mb-4">
            <img class="w-25" src="{{ asset('images/peoples/hss-kaushik.jpg') }}" alt="Director CIT Kokrajhar">
            <div class="flex-fill ml-4">
              <span class="d-block h6 font-italic mb-0">Member</span>
              <span class="d-block h6 font-weight-bold">Kaushik Barman</span>
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
      </div>
    </div>
  </div>

  <section id="compactgallery" class="gallery-block compact-gallery">
      <div class="container">
          <div class="mb-4">
              <h4>Previous Linguistics Events at CIT Kokrajhar</h4>
          </div>
          <div class="row no-gutters">
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image7.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image7.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Linguistics Events</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image8.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image8.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Linguistics Events</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image9.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image9.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Linguistics Events</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image10.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image10.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Linguistics Events</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                      </a>
                  </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image11.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image11.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Linguistics Events</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image12.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image12.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Linguistics Events</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image13.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image13.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Linguistics Events</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image6.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image6.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Linguistics Events</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image5.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image5.jpg') }}">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Linguistics Events</span>
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
