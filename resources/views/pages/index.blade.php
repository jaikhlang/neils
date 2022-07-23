@extends('layouts.app')
@section('title', 'Home')
<!-- Meta Tags  -->
@section('metatags')
  <meta name="description" content="11th International Conference of the North East Indian Linguistics Society will be held in CIT Kokrajhar BTAD Assam India 783370 from 7th to 9th February 2020. The conference is hosted by the Department of Humanities & Social Sciences and Center for Linguistics and Cultural Studies, CIT Kokrajhar.">
  <meta name="keywords" content="NEILS, NEILS11, 'North East Indian Linguistics', 'Linguistics', 'CIT Kokrajhar', 'Conference 2020', 'Gauhati University Conference'">
@endsection
<!-- Custom Styles -->
@section('stylesheets')
  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <img src="{{ asset('images/slides/neils12a.jpg') }}" class="d-block w-100" style="padding-top: 50px" alt="NEILS12 Conference">
            <div class="carousel-caption d-none d-md-block">
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
          <div class="carousel-item">
            <img src="{{ asset('images/slides/neils12C.jpg') }}" class="d-block w-100" style="padding-top: 50px" alt="NEILS12 Conference">
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

    <div class="" style="background-color: #000000; color: #FFFFFF;">
      <div class="container">
        <marquee class="mb-0 py-2 align-middle">
          <span class="text-white">This site is currently undergoing maintenance and will be back shortly.</span>
          <a href="{{ route('pages.paper') }}#posterpresenter" style="font-size: 12px; color: #FFFFFF;" class="d-inline-block text-decoration-none mr-4 mb-0 text-uppercase" target="_blank">⚫ Instructons for poster presenters. (Poster Size)</a>
        </marquee>
      </div>
    </div>

    <div class="d-block py-5 border-bottom border-top">
      <div class="container">
        <div class="d-md-flex justify-content-center mb-4">
          {{-- <a href="{{ route('register') }}" class="d-inline-block mb-2 btn btn-danger btn-lg px-4 py-2 mx-2 text-decoration-none">Registration</a> --}}
          <a href="{{ asset('uploads/NEILS11-Abstracts.pdf') }}" class="d-inline-block mb-2 btn btn-danger btn-lg px-4 py-2 mx-2 text-decoration-none">NEILS11 Abstracts</a>
          <!-- <a href="{{ url('https://forms.gle/PtAF7ZMTYqmZYxG36') }}" class="d-inline-block mb-2 btn btn-primary btn-lg px-4 py-2 mx-2 text-decoration-none" target="_blank">Accommodation</a> -->
          <!-- <a href="{{ route('pages.neils') }}#reach" class="d-inline-block mb-2 btn btn-dark btn-lg px-4 py-2 mx-2 text-decoration-none">How to reach Kokrajhar?</a> -->
          <a href="{{ route('pages.paper') }}" class="d-inline-block mb-2 btn btn-primary btn-lg px-4 py-2 mx-2 text-decoration-none">NEILS12 Call for Paper</a>
        </div>
      </div>
    </div>

    <div class="bg-white d-block py-5 border-bottom border-light">
      <div class="container">
        <div class="d-block mb-5">
           <div class="neils-head text-center">
             <h2 class="font-weight-bold">NEILS 12 CONFERENCE 2023</h2>
             <span class="d-block text-uppercase">Will be held in Gauhati University, Guwahati, Assam India</span>
             <span class="d-block text-uppercase mb-3">from 3rd to 5th february 2023</span>
             <a href="{{ route('pages.neils') }}" class="d-inline-block btn btn-danger btn-lg px-4 py-2 mx-2 text-decoration-none">Explore NEILS12</a>
           </div>
        </div>

        <div class="d-block mb-4">
          <h4 class="d-block mb-2">North East Indian Linguistics Society</h4>
          <span class="d-block text-justify mb-2">
            NEILS was set up in 2005 by Prof. Jyotiprakash Tamuli (Gauhati University), Dr. Stephen Morey (La Trobe University, Australia) and Dr. Mark Post (now The University of Sydney) to provide a forum for those who are working on the languages of the North East India. From the very beginning, a key aim of NEILS has been cooperation between local and foreign scholars, with an emphasis on high quality work, on capacity building leading to excellent linguistic research.
          </span>

          <span class="d-block text-justify mb-2">
            As the primary focus of NEILS is description of the rich cultural-linguistic diversity that exists in North East India, we are interested in work that is grounded in data, new data collected from the large number of languages and dialects spoken in the North East, leading to important new research on the classification and grouping of languages, on their sound systems, word and phrase structures, literature and social use.
          </span>

          <span class="d-block text-justify">
            So far NEILS has organised 10 conferences in various universities of North East India. It was annually held from 2006 to 2012 and then 2014 and henceforth the conference has been organised biennially. NEILS presents a unique opportunity from younger scholars, often PhD students and those who are engaged in study at different levels, to interact with some of the most experienced and knowledgeable scholars in the field of linguistics.
          </span>
        </div>

        <div id="photos" class="d-block">
          <div class="row">
            <div class="col-md-4 cursor-pointer">
              <img src="{{ asset('images/conferences/image1.jpg') }}" class="img-fluid mb-4" alt="">
            </div>
            <div class="col-md-4 cursor-pointer">
              <img src="{{ asset('images/conferences/image2.jpg') }}" class="img-fluid mb-4" alt="">
            </div>
            <div class="col-md-4 cursor-pointer">
              <img src="{{ asset('images/conferences/image3.jpg') }}" class="img-fluid mb-4" alt="">
            </div>
            <div class="col-md-4 cursor-pointer">
              <img src="{{ asset('images/conferences/image4.jpg') }}" class="img-fluid mb-4" alt="">
            </div>
            <div class="col-md-4 cursor-pointer">
              <img src="{{ asset('images/conferences/image5.jpg') }}" class="img-fluid mb-4" alt="">
            </div>
            <div class="col-md-4 cursor-pointer">
              <img src="{{ asset('images/conferences/image6.jpg') }}" class="img-fluid mb-4" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="publications" class="d-none py-5 border-top border-bottom border-light">
      <div class="container">
        <div class="d-block mb-4">
          <h4 class="text-center">NEILS Publications</h4>
        </div>

        <div class="row">
          <div class="col-md-6">
            <a href="#!" class="d-block text-decoration-none bg-white rounded shadow mb-3">
              <div class="d-md-flex align-items-center">
                <img src="{{ asset('images/book.jpeg') }}" class="img-fluid rounded-left" alt="">
                <div class="px-3 py-3 text-left">
                  <h5 class="text-black-50 mx-0 my-0">Some Book Title</h5>
                  <span class="d-block text-black-50">Author Name</span>
                  <span class="d-block text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi necessitatibus temporibus tenetur quisquam iusto explicabo voluptates, consectetur veritatis reiciendis adipisci!</span>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6">
            <a href="#!" class="d-block text-decoration-none bg-white rounded shadow">
              <div class="d-md-flex align-items-center">
                <img src="{{ asset('images/book.jpeg') }}" class="img-fluid rounded-left" alt="">
                <div class="px-3 py-3 text-left">
                  <h5 class="text-black-50 mx-0 my-0">Some Book Title</h5>
                  <span class="d-block text-black-50">Author Name</span>
                  <span class="d-block text-black-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quod modi ipsam nemo enim accusamus, aliquid commodi nostrum nam sit.</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    @include('layouts.partials.footer')
  </section>
@endsection

<!-- Custom Scripts -->
@section('scripts')

@endsection
