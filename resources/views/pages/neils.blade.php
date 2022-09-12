@extends('layouts.app')
@section('title', 'NEILS12')
<!-- Meta Tags  -->
@section('metatags')
<meta name="keywords" content="neils 2023, conference, linguistic conference, neils at cit kokrajhar, north east indian linguistics society, center for linguistics, february conference cit kokrajhar">
<meta name="description" content="NEILS 12 conference will be held in Gauhati University, Guwahati, Assam India in the month of February 2023. The conference will be hosted by Dept. of Humanities and Social Sciences and Center for Linguistics and Cultural Studies, CIT Kokrajhar.">
@endsection

<!-- Custom Styles -->
@section('stylesheets')
  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  <link rel="stylesheet" href="{{ asset('css/compact-gallery.css')}}">
@endsection

<!-- Contents -->
@section('content')


  <div id="schedule" class="d-block py-5 border-top">
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
            <h4 class="font-weight-bold">Registration Fees</h4>
            <div class="bg-white rounded-lg border my-3">
              <table class="table text-danger mb-0">
                <tbody>
                  <tr class="">
                    <td class="px-4 text-nowrap border-top-0">Rs. 1000</td>
                    <td class="px-4 border-left border-top-0"><strong>SAARC student without</strong> financial support (please provide evidence such as a letter from the Head of the Department)</td>
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
            <a href="{{ route('register') }}" class="d-inline-block btn btn-danger btn-lg mb-2 mr-2">Register for NEILS12</a>
            <a href="{{ route('pages.paper') }}" class="d-inline-block btn btn-outline-danger btn-lg mb-2">Call for Paper</a>
          </div>
        </div>
        <div class="col-md-6">
          <h4 class="font-weight-bold">Important Dates</h4>
          <div class="py-2 mb-4">
            <div class="rounded-lg border bg-white" id="status">
              <table class="table rounded-lg my-0">
                <tbody>
                  <tr class="cursor-pointer">
                    <td class=" border-top-0">September 15, 2022</td>
                    <td class="text-danger border-top-0">Abstract submission deadline.</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>Early October</td>
                    <td>
                      <span class="d-block text-danger">Notification of abstract acceptance.</span>
                    </td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>November 1, 2022</td>
                    <td class="text-danger font-weight-bold">Registration opens (For presenters and non-presenters).</td>
                  </tr>
                  <tr class="cursor-pointer">
                    <td>December 1, 2022</td>
                    <td class="blinkme font-weight-bold">Registration closes for presenters.</td>
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
  <section id="" class="">
    <div class="d-md-flex align-items-center">
      <img src="{{ asset('images/slides/neils12i.jpg') }}" alt="" style="width: 100%;" class="w-full img-fluid">
    </div>
  </section>

<section class="py-5 border-bottom">
  <div class="container">
    <div class="mb-4">
      <h4 class=" font-weight-bold">Programme Committee, NEILS12</h4>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="d-flex justify-content-between align-items-center w-100 mb-4">
          <img src="{{ asset('images/peoples/prafulla.jpg') }}" class="w-25" alt="Prafulla Basumatary">
          <div class="flex-fill ml-4">
            <span class="d-block font-weight-bold">Prafulla Basumatary</span>
            <span class="d-block">(Gauhati University)</span>
            <span class="d-block">pbasumatari@gmail.com</span>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="d-flex justify-content-between align-items-center w-100 mb-4">
          <img src="{{ asset('images/peoples/krishna.jpg') }}" class="w-25" alt="Krishna Boro">
          <div class="flex-fill ml-4">
            <span class="d-block font-weight-bold">Krishna Boro </span>
            <span class="d-block">(Gauhati University)</span>
            <span class="d-block">krishnaboro08@gmail.com</span>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="d-flex justify-content-between align-items-center w-100 mb-4">
          <img src="{{ asset('images/peoples/hss-bihung.jpg') }}" class="w-25" alt="Bihung Brahma">
          <div class="flex-fill ml-4">
            <span class="d-block font-weight-bold">Bihung Brahma </span>
            <span class="d-block">(Central Institute of Technology Kokrajhar)</span>
            <span class="d-block">bihung.brahma@gmail.com</span>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="d-flex justify-content-between align-items-center w-100 mb-4">
          <img src="{{ asset('images/peoples/scottde.jpg') }}" class="w-25" alt="Scott DeLancey">
          <div class="flex-fill ml-4">
            <span class="d-block font-weight-bold">Scott DeLancey </span>
            <span class="d-block">(University of Oregon)</span>
            <span class="d-block">delancey@uoregon.edu</span>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="d-flex justify-content-between align-items-center w-100 mb-4">
          <img src="{{ asset('images/peoples/linda.jpg') }}" class="w-25" alt="Linda Konnerth">
          <div class="flex-fill ml-4">
            <span class="d-block font-weight-bold">Linda Konnerth </span>
            <span class="d-block">(University of Cologne)</span>
            <span class="d-block">linda.konnerth@uni-koeln.de</span>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="d-flex justify-content-between align-items-center w-100 mb-4">
          <img src="{{ asset('images/peoples/morey.jpeg') }}" class="w-25" alt="Stephen Morey">
          <div class="flex-fill ml-4">
            <span class="d-block font-weight-bold">Stephen Morey </span>
            <span class="d-block">(La Trobe University)</span>
            <span class="d-block">s.morey@latrobe.edu.au</span>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="d-flex justify-content-between align-items-center w-100 mb-4">
          <img src="{{ asset('images/peoples/mijke.jpg') }}" class="w-25" alt="Mijke Mulder">
          <div class="flex-fill ml-4">
            <span class="d-block font-weight-bold">Mijke Mulder </span>
            <span class="d-block">(Payap University)</span>
            <span class="d-block">mijke.mulder@gmail.com</span>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="d-flex justify-content-between align-items-center w-100 mb-4">
          <img src="{{ asset('images/peoples/kellen.jpg') }}" class="w-25" alt="Kellen Parker van Dam">
          <div class="flex-fill ml-4">
            <span class="d-block font-weight-bold">Kellen Parker van Dam </span>
            <span class="d-block">(University of Zurich)</span>
            <span class="d-block">kellenparker@gmail.com</span>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="d-flex justify-content-between align-items-center w-100 mb-4">
          <img src="{{ asset('images/peoples/jyotiprakash.jpg') }}" class="w-25" alt="Jyotiprakash Tamuli">
          <div class="flex-fill ml-4">
            <span class="d-block font-weight-bold">Jyotiprakash Tamuli </span>
            <span class="d-block">(Gauhati University)</span>
            <span class="d-block">jyotiprakash.tamuli@gmail.com</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <div id="organizer" class="py-5 bg-white border-bottom">
    <div class="container">
      <div class="mb-4">
        <h4 class=" font-weight-bold">Local Organizers, NEILS12</h4>
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
          <div class="mb-4 font-weight-bold">
              <h4>Previous NEILS Conferences</h4>
          </div>
          <div class="row no-gutters">
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="{{ asset('images/conferences/image16.jpg') }}">
                    <img class="img-fluid image" src="{{ asset('images/conferences/image16.jpg') }}" alt="NEILS Conference">
                    <span class="description">
                        <span class="description-heading">NEILS11 Conference</span>
                    </span>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="{{ asset('images/conferences/image17.jpg') }}">
                    <img class="img-fluid image" src="{{ asset('images/conferences/image17.jpg') }}" alt="NEILS Conference">
                    <span class="description">
                        <span class="description-heading">NEILS11 Conference</span>
                    </span>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="{{ asset('images/conferences/image18.jpg') }}">
                    <img class="img-fluid image" src="{{ asset('images/conferences/image18.jpg') }}" alt="NEILS Conference">
                    <span class="description">
                        <span class="description-heading">NEILS11 Conference</span>
                    </span>
                </a>
            </div>
            <div class="col-md-6 col-lg-4 item zoom-on-hover">
                <a class="lightbox" href="{{ asset('images/conferences/image15.jpg') }}">
                    <img class="img-fluid image" src="{{ asset('images/conferences/image15.jpg') }}" alt="NEILS Conference">
                    <span class="description">
                        <span class="description-heading">NEILS11 Conference</span>
                    </span>
                </a>
            </div>

              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image1.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image1.jpg') }}" alt="NEILS Conference">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image2.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image2.jpg') }}" alt="NEILS Conference">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image3.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image3.jpg') }}" alt="NEILS Conference">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image11.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image11.jpg') }}" alt="NEILS Conference">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image12.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image12.jpg') }}" alt="NEILS Conference">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image13.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image13.jpg') }}" alt="NEILS Conference">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image6.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image6.jpg') }}" alt="NEILS Conference">
                      <span class="description">
                          <span class="description-heading">Previous NEILS Conference</span>
                          {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                      </span>
                  </a>
              </div>
              <div class="col-md-6 col-lg-4 item zoom-on-hover">
                  <a class="lightbox" href="{{ asset('images/conferences/image5.jpg') }}">
                      <img class="img-fluid image" src="{{ asset('images/conferences/image5.jpg') }}" alt="NEILS Conference">
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
