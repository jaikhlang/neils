@extends('layouts.app')
@section('title', 'About the Society')
<!-- Meta Tags  -->
@section('metatags')
  <meta name="description" content="NEILS was set up in 2005 by Prof. Jyotiprakash Tamuli (Gauhati University), Dr. Stephen Morey (La Trobe University, Australia) and Dr. Mark Post (now The University of Sydney) to provide a forum for those who are working on the languages of the North East India. From the very beginning, a key aim of NEILS has been cooperation between local and foreign scholars, with an emphasis on high quality work, on capacity building leading to excellent linguistic research.">
  <meta name="keywords" content="about neils, 'neils2020', neils11, NEILS, NEILS11, 'North East Indian Linguistics Society', 'Linguistics', 'CIT Kokrajhar', 'Conference 2020'">
@endsection

<!-- Custom Styles -->
@section('stylesheets')
  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
  <link rel="stylesheet" href="{{ asset('css/compact-gallery.css')}}">
  <style media="screen">
    #abouts{
      background-image: url('{{ asset('images/brahmaputra.jpg') }}');
      background-repeat: no-repeat;
      background-position: right;
      background-size: 100%;
    }
  </style>
@endsection

<!-- Contents -->
@section('content')
  <section id="showcase" class="border-top border-bottom border-light d-none">
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

  <section id="abouts" class="bg-light py-5 border-top border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6" style="z-index: 300;">
          <div class="text-justify bg-white px-4 py-4 rounded shadow">
            <div class="mb-3">
              <h4 class="">North East Indian Linguistics Society (NEILS)</h4>
            </div>
            <span class="d-block mb-2">
              NEILS was set up in 2005 by Prof. Jyotiprakash Tamuli (Gauhati University), Dr. Stephen Morey (La Trobe University, Australia) and Dr. Mark Post (now The University of Sydney) to provide a forum for those who are working on the languages of the North East India. From the very beginning, a key aim of NEILS has been cooperation between local and foreign scholars, with an emphasis on high quality work, on capacity building leading to excellent linguistic research.
            </span>
            <span class="d-block mb-2">
              As the primary focus of NEILS is description of the rich cultural-linguistic diversity that exists in North East India, we are interested in work that is grounded in data, new data collected from the large number of languages and dialects spoken in the North East, leading to important new research on the classification and grouping of languages, on their sound systems, word and phrase structures, literature and social use.
            </span>
            <span class="d-block mb-2">
              So far NEILS has organised 10 conferences in various universities of North East India. It was annually held from 2006 to 2012 and then 2014 and henceforth the conference has been organised biennially. NEILS presents a unique opportunity from younger scholars, often PhD students and those who are engaged in study at different levels, to interact with some of the most experienced and knowledgeable scholars in the field of linguistics.
            </span>
            <span class="d-block">
              The conference papers are peer-reviewed and carefully edited and published. These publications have a high academic standard, and have brought important research work by scholars from North East India to the attention of an International audience.
            </span>
          </div>
        </div>
        <div class="col-md-6 d-none" style="margin-left: -50px; z-index: 200;">
          <div class="py-3">
            <img src="{{ asset('images/image.jpg') }}" class="-ml-5 w-50 bg-white py-2 pr-2 rounded-right mb-2" alt="">
            <div class="d-flex mb-2">
              <img src="{{ asset('images/image2.jpg') }}" class="w-50 d-block bg-warning py-2 pr-2 rounded-right shadow" style="z-index: 200" alt="">
              <img src="{{ asset('images/image3.jpg') }}" class="w-50 d-block bg-warning py-2 pr-2 rounded-right" style="z-index: 199; margin-left: -20%;" alt="">
            </div>

            <div class="d-flex mb-2">
              <img src="{{ asset('images/image3.jpg') }}" class="w-50 d-block bg-white py-2 pr-2 rounded-right shadow" style="z-index: 200" alt="">
              <img src="{{ asset('images/image2.jpg') }}" class="w-50 d-block bg-white py-2 pr-2 rounded-right" style="z-index: 199; margin-left: -20%;" alt="">
              <img src="{{ asset('images/image1.jpg') }}" class="w-50 d-block bg-white py-2 pr-2 rounded-right" style="z-index: 198; margin-left: -30%;" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @include('layouts.partials.footer')
@endsection

<!-- Custom Scripts -->
@section('scripts')

@endsection
