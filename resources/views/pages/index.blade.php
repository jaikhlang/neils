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
            <img src="{{ url('https://dummyimage.com/1300x400/66630b/fff.jpg&text=+') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="mb-5 pb-4">
                <h5 class="mb-0 font-weight-bold h2"><img src="{{ asset('images/logo.png') }}" class="d-inline-block img-fluid" alt=""> <span class="d-inline-block">CONFERENCE 2020</span></h5>
                <p class="mb-0 font-weight-bold h4">11th International Conference of the North East Indian Linguistics Society</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ url('https://dummyimage.com/1300x400/66630b/fff.jpg&text=+') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="mb-5 pb-4">
                <h5 class="mb-0 font-weight-bold h2"><img src="{{ asset('images/logo.png') }}" class="d-inline-block img-fluid" alt=""> <span class="d-inline-block">CONFERENCE 2020</span></h5>
                <p class="mb-0 font-weight-bold h4">11th International Conference of the North East Indian Linguistics Society</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ url('https://dummyimage.com/1300x400/66630b/fff.jpg&text=+') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="mb-5 pb-4">
                <h5 class="mb-0 font-weight-bold h2"><img src="{{ asset('images/logo.png') }}" class="d-inline-block img-fluid" alt=""> <span class="d-inline-block">CONFERENCE 2020</span></h5>
                <p class="mb-0 font-weight-bold h4">11th International Conference of the North East Indian Linguistics Society</p>
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

    <div class="d-block py-5 border-bottom">
      <div class="container">
        <div class="d-md-flex justify-content-center">
          <a href="{{ route('register') }}" class="d-inline-block mb-2 btn btn-primary btn-lg px-4 py-2 mx-2 text-decoration-none">Registration</a>
          <a href="{{ route('register') }}" class="d-inline-block mb-2 btn btn-primary btn-lg px-4 py-2 mx-2 text-decoration-none">Accomodation</a>
          <a href="{{ route('pages.neils') }}#status" class="d-inline-block mb-2 btn btn-dark btn-lg px-4 py-2 mx-2 text-decoration-none">Paper Status</a>
          <a href="{{ route('pages.paper') }}" class="d-inline-block mb-2 btn btn-danger btn-lg px-4 py-2 mx-2 text-decoration-none">NEILS11 Call for Paper</a>
        </div>
      </div>
    </div>

    <div class="bg-white d-block py-5 border-bottom border-light">
      <div class="container">
        <div class="d-block mb-5">
           <div class="neils-head text-center">
             <h2 class="font-weight-bold">NEILS 11 CONFERENCE 2020</h2>
             <span class="d-block text-uppercase">Will be held in Central Institute of Technology Kokrajhar</span>
             <span class="d-block text-uppercase mb-3">from 7th to 9th february 2020</span>
             <a href="{{ route('pages.neils') }}" class="d-inline-block btn btn-danger btn-lg px-4 py-2 mx-2 text-decoration-none">Explore NEILS11</a>
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
            <div class="col-md-4">
              <img src="{{ asset('images/conferences/image1.jpg') }}" class="img-fluid mb-4" alt="">
            </div>
            <div class="col-md-4">
              <img src="{{ asset('images/conferences/image2.jpg') }}" class="img-fluid mb-4" alt="">
            </div>
            <div class="col-md-4">
              <img src="{{ asset('images/conferences/image3.jpg') }}" class="img-fluid mb-4" alt="">
            </div>
            <div class="col-md-4">
              <img src="{{ asset('images/conferences/image4.jpg') }}" class="img-fluid mb-4" alt="">
            </div>
            <div class="col-md-4">
              <img src="{{ asset('images/conferences/image5.jpg') }}" class="img-fluid mb-4" alt="">
            </div>
            <div class="col-md-4">
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



    <div id="organiser" class="d-none organiser py-5 bg-white border-top border-light">
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
