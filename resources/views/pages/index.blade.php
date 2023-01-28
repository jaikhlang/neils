@extends('layouts.app')
@section('title', 'Home')
<!-- Meta Tags  -->
@section('metatags')
  <meta name="description" content="12th International Conference of the North East Indian Linguistics Society will be held in Gauhati University, Guwahati, Assam India from 3rd to 5th February 2023. The conference is hosted by the Department of Linguistics Gauhati University, Guwahati, Assam IN">
  <meta name="keywords" content="NEILS, NEILS12, 'North East Indian Linguistics', 'Linguistics', 'Gauhati University', 'Conference 2023', 'Gauhati University Conference'">
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
  <section id="carousel" class="absolute-lg position-top-lg index-m-1">
    <div class="d-none d-md-block bd-example">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/slides/neils12c.jpg') }}" class="d-block w-100" style="padding-top: 50px" alt="NEILS12 Conference">
            <div class="carousel-caption d-none d-md-block">
              <div class="mb-5 pb-5">
                <!-- <h5 class="mb-0 font-weight-bold h2"><img src="{{ asset('images/logo.png') }}" class="d-inline-block img-fluid" alt=""> <span class="d-inline-block">CONFERENCE 2020</span></h5> -->
                <!--p class="mb-0 font-weight-bold h4 pb-2">11th International Conference of the North East Indian Linguistics Society</p-->
                <!--span class="d-block pb-2"><a href="{{ route('pages.neils') }}" class="btn btn-danger">Konw More</a></span-->
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/slides/neils12b.jpg') }}" class="d-block w-100" style="padding-top: 50px" alt="NEILS12 Conference">
            <div class="carousel-caption d-none d-md-block">
              <div class="mb-5 pb-5">
                <!-- <h5 class="mb-0 font-weight-bold h2"><img src="{{ asset('images/logo.png') }}" class="d-inline-block img-fluid" alt=""> <span class="d-inline-block">CONFERENCE 2020</span></h5> -->
                <!--p class="mb-0 font-weight-bold h4 pb-2">11th International Conference of the North East Indian Linguistics Society</p-->
                <!--span class="d-block pb-2"><a href="{{ route('pages.neils') }}" class="btn btn-danger">Konw More</a></span-->
              </div>
            </div>
          </div>
          <!--div class="carousel-item active">
            <img src="{{ asset('images/slides/neils12a.jpg') }}" class="d-block w-100" style="padding-top: 50px" alt="NEILS12 Conference">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div-->

          <div class="carousel-item">
            <img src="{{ asset('images/slides/neils12f.jpg') }}" class="d-block w-100" style="padding-top: 50px" alt="NEILS12 Conference">
            <div class="carousel-caption d-none d-md-block">
              <div class="mb-5 pb-5">
                <!-- <h5 class="mb-0 font-weight-bold h2"><img src="{{ asset('images/logo.png') }}" class="d-inline-block img-fluid" alt=""> <span class="d-inline-block">CONFERENCE 2020</span></h5> -->
                <!--p class="mb-0 font-weight-bold h4 pb-2">11th International Conference of the North East Indian Linguistics Society</p-->
                <!--span class="d-block pb-2"><a href="{{ route('pages.neils') }}" class="btn btn-danger">Konw More</a></span-->
              </div>
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

    @include('layouts.widgets.intro')

    <div class="bg-grey-light d-block py-5 border-bottom border-top border-grey-dark">
      <div class="container">
        <div class="d-block mb-5">
           <div class="neils-head text-center">
             <h2 class="font-weight-bold">NEILS 12 CONFERENCE 2023</h2>
             <span class="d-block text-uppercase">Will be held in Gauhati University, Guwahati, Assam India</span>
             <span class="d-block text-uppercase mb-3">from 3rd to 5th february 2023</span>
             <div class="d-md-flex justify-content-center">
               <a href="{{ route('pages.neils') }}" class="d-inline-block mb-2 btn btn-danger btn-lg px-4 py-2 mx-2 text-decoration-none">Explore NEILS12</a>
               <a href="{{ route('pages.paper') }}" class="d-inline-block mb-2 btn btn-primary btn-lg px-4 py-2 mx-2 text-decoration-none">NEILS12 Call for Paper</a>
               <a href="{{ asset('uploads/NEILS12_schedule_February2023_withoutchairs.pdf') }}"    class="d-inline-block mb-2 btn btn-danger btn-lg px-4 py-2 mx-2 text-decoration-none" target="_blank">Programme Schedule</a>
               <a href="{{ asset('uploads/NEILS11-Abstracts.pdf') }}" class="d-inline-block mb-2 btn btn-primary btn-lg px-4 py-2 mx-2 text-decoration-none">NEILS11 Abstracts</a>
             </div>
           </div>
        </div>

        <div class="d-block">
          <h2 class="d-block mb-2">North East Indian Linguistics Society</h2>
          <p>
            <span class="d-block text-justify mb-2">
              NEILS was set up in 2005 by Prof. Jyotiprakash Tamuli (Gauhati University), Dr. Stephen Morey (La Trobe University, Australia) and Dr. Mark Post (now The University of Sydney) to provide a forum for those who are working on the languages of the North East India. From the very beginning, a key aim of NEILS has been cooperation between local and foreign scholars, with an emphasis on high quality work, on capacity building leading to excellent linguistic research.
            </span>

            <span class="d-block text-justify mb-2">
              As the primary focus of NEILS is description of the rich cultural-linguistic diversity that exists in North East India, we are interested in work that is grounded in data, new data collected from the large number of languages and dialects spoken in the North East, leading to important new research on the classification and grouping of languages, on their sound systems, word and phrase structures, literature and social use.
            </span>

            <span class="d-block text-justify mb-2">
              So far NEILS has organised 11 conferences in various universities of North East India. It was annually held from 2006 to 2012 and then 2014 and henceforth the conference has been organised biennially. NEILS presents a unique opportunity from younger scholars, often PhD students and those who are engaged in study at different levels, to interact with some of the most experienced and knowledgeable scholars in the field of linguistics.
            </span>
          </p>
        </div>

        <div id="compactgallery" class="gallery-block compact-gallery">
            <div class="">
                <div class="mb-4">
                    <h4 class="font-weight-bold">Previous NEILS Conferences</h4>
                </div>
                <div class="row no-gutters">
                  <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="{{ asset('images/conferences/image16.jpg') }}">
                          <img class="img-fluid image" src="{{ asset('images/conferences/image16.jpg') }}" alt="NEILS11 Conference">
                          <span class="description">
                              <span class="description-heading">NEILS11 Conference</span>
                          </span>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="{{ asset('images/conferences/image17.jpg') }}">
                          <img class="img-fluid image" src="{{ asset('images/conferences/image17.jpg') }}" alt="NEILS11 Conference">
                          <span class="description">
                              <span class="description-heading">NEILS11 Conference</span>
                          </span>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="{{ asset('images/conferences/image18.jpg') }}">
                          <img class="img-fluid image" src="{{ asset('images/conferences/image18.jpg') }}" alt="NEILS11 Conference">
                          <span class="description">
                              <span class="description-heading">NEILS11 Conference</span>
                          </span>
                      </a>
                  </div>
                  <div class="col-md-6 col-lg-4 item zoom-on-hover">
                      <a class="lightbox" href="{{ asset('images/conferences/image15.jpg') }}">
                          <img class="img-fluid image" src="{{ asset('images/conferences/image15.jpg') }}" alt="NEILS11 Conference">
                          <span class="description">
                              <span class="description-heading">NEILS11 Conference</span>
                          </span>
                      </a>
                  </div>






                    <div class="col-md-6 col-lg-4 item zoom-on-hover">
                        <a class="lightbox" href="{{ asset('images/conferences/image7.jpg') }}">
                            <img class="img-fluid image" src="{{ asset('images/conferences/image7.jpg') }}" alt="NEILS Conference">
                            <span class="description">
                                <span class="description-heading">Previous NEILS Conference</span>
                                {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                            </span>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover">
                        <a class="lightbox" href="{{ asset('images/conferences/image8.jpg') }}">
                            <img class="img-fluid image" src="{{ asset('images/conferences/image8.jpg') }}" alt="NEILS Conference">
                            <span class="description">
                                <span class="description-heading">Previous NEILS Conference</span>
                                {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                            </span>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover">
                        <a class="lightbox" href="{{ asset('images/conferences/image9.jpg') }}">
                            <img class="img-fluid image" src="{{ asset('images/conferences/image9.jpg') }}" alt="NEILS Conference">
                            <span class="description">
                                <span class="description-heading">Previous NEILS Conference</span>
                                {{-- <span class="description-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span> --}}
                            </span>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 item zoom-on-hover">
                        <a class="lightbox" href="{{ asset('images/conferences/image10.jpg') }}">
                            <img class="img-fluid image" src="{{ asset('images/conferences/image10.jpg') }}" alt="NEILS Conference">
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
        </div>

      </div>
    </div>
    @include('layouts.partials.footer')
  </section>
@endsection

<!-- Custom Scripts -->
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.compact-gallery', { animation: 'slideIn'});
</script>
@endsection
