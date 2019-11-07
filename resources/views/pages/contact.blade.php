@extends('layouts.app')
@section('title', 'Contact Us')
<!-- Meta Tags  -->
@section('metatags')

@endsection

<!-- Custom Styles -->
@section('stylesheets')
  <!-- Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <style media="screen">
    .theorganizer svg, .address svg{
      width: 16px;
    }
    #reach svg{
      width: 32px;
    }
  </style>
@endsection

<!-- Contents -->
@section('content')

  <section id="" class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class=" mb-4">
            <span class="d-block mb-2 text-dark-50">NEILS 2020 ADDRESS</span>
            <div class="address bg-white rounded-lg px-2 py-2 mb-2 shadow cursor-pointer">
              <span class="d-block mb-2 text-dark">
                  DEPARTMENT OF HUMANITIES AND SOCIAL SCIENCES<br>
                  CENTRAL INSTITUTE OF TECHNOLOGY KOKRAJHAR<br>
                  Balagaon,Kokrajhar, BTAD, Assam India<br>
                  Rangalikhata 783370
              </span>
              <div class="">
                <span class="d-inline-block mr-4 d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="inline-block fill-current mr-2" viewBox="0 0 20 20"><path d="M20 18.35V19a1 1 0 0 1-1 1h-2A17 17 0 0 1 0 3V1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v4c0 .56-.31 1.31-.7 1.7L3.16 8.84c1.52 3.6 4.4 6.48 8 8l2.12-2.12c.4-.4 1.15-.71 1.7-.71H19a1 1 0 0 1 .99 1v3.35z"/></svg>
                  <span class="block">Phone: +91 8472014223</span>
                </span>
                <span class="d-inline-block mr-4 d-flex align-items-center">
                  <svg xmlns="http://www.w3.org/2000/svg" class="inline-block fill-current mr-2" viewBox="0 0 20 20"><path d="M10 15l-4 4v-4H2a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-8zM5 7v2h2V7H5zm4 0v2h2V7H9zm4 0v2h2V7h-2z"/></svg>
                  <span class="block">Email: <a href="{{ url('mailto:b.brahma@cit.ac.in') }}" class="text-gray-700 hover:text-gray-800">b.brahma@cit.ac.in</a></span>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="theorganizer mb-4">
            <span class="d-block mb-2 text-dark-50">THE ORGANIZERS NEILS11</span>
            <div class="row">
              <div class="col-md-6 d-block">
                <div class="bg-white rounded-lg px-2 py-2 mb-2 shadow cursor-pointer">
                  Krishna Boro <br>
                  <svg xmlns="http://www.w3.org/2000/svg" class="inline-block fill-current mr-2" viewBox="0 0 20 20"><path d="M10 15l-4 4v-4H2a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-8zM5 7v2h2V7H5zm4 0v2h2V7H9zm4 0v2h2V7h-2z"/></svg>
                  krishnaboro08@gmail.com
                </div>
              </div>
              <div class="col-md-6 d-block">
                <div class="bg-white rounded-lg px-2 py-2 mb-2 shadow cursor-pointer">
                  Scott DeLancey <br>
                  <svg xmlns="http://www.w3.org/2000/svg" class="inline-block fill-current mr-2" viewBox="0 0 20 20"><path d="M10 15l-4 4v-4H2a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-8zM5 7v2h2V7H5zm4 0v2h2V7H9zm4 0v2h2V7h-2z"/></svg>
                  delancey@uoregon.edu
                </div>
              </div>
              <div class="col-md-6 d-block">
                <div class="bg-white rounded-lg px-2 py-2 mb-2 shadow cursor-pointer">
                  Linda Konnerth <br>
                  <svg xmlns="http://www.w3.org/2000/svg" class="inline-block fill-current mr-2" viewBox="0 0 20 20"><path d="M10 15l-4 4v-4H2a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-8zM5 7v2h2V7H5zm4 0v2h2V7H9zm4 0v2h2V7h-2z"/></svg>
                  linda.konnerth@mail.huji.ac.il
                </div>
              </div>
              <div class="col-md-6 d-block">
                <div class="bg-white rounded-lg px-2 py-2 mb-2 shadow cursor-pointer">
                  Stephen Morey <br>
                  <svg xmlns="http://www.w3.org/2000/svg" class="inline-block fill-current mr-2" viewBox="0 0 20 20"><path d="M10 15l-4 4v-4H2a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-8zM5 7v2h2V7H5zm4 0v2h2V7H9zm4 0v2h2V7h-2z"/></svg>
                  S.Morey@latrobe.edu.au
                </div>
              </div>
              <div class="col-md-6 d-block">
                <div class="bg-white rounded-lg px-2 py-2 mb-2 shadow cursor-pointer">
                  Jyotiprakash Tamuli <br>
                  <svg xmlns="http://www.w3.org/2000/svg" class="inline-block fill-current mr-2" viewBox="0 0 20 20"><path d="M10 15l-4 4v-4H2a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-8zM5 7v2h2V7H5zm4 0v2h2V7H9zm4 0v2h2V7h-2z"/></svg>
                  jyotiprakash.tamuli@gmail.com
                </div>
              </div>
              <div class="col-md-6 d-block">
                <div class="bg-white rounded-lg px-2 py-2 mb-2 shadow cursor-pointer">
                  Bihung Brahma <br>
                  <svg xmlns="http://www.w3.org/2000/svg" class="inline-block fill-current mr-2" viewBox="0 0 20 20"><path d="M10 15l-4 4v-4H2a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-8zM5 7v2h2V7H5zm4 0v2h2V7H9zm4 0v2h2V7h-2z"/></svg>
                  b.brahma@cit.ac.in
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="reach" class="bg-gradient-success text-white py-5">
    <div class="container">
      <div class="d-md-flex w-100 justify-content-between cursor-pointer align-items-center w-full">
        <div class="flex-fill">
          <span class="d-flex align-items-center px-3 py-2 mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="text-white d-inline-block mr-2" viewBox="0 0 20 20"><path d="M8.4 12H2.8L1 15H0V5h1l1.8 3h5.6L6 0h2l4.8 8H18a2 2 0 1 1 0 4h-5.2L8 20H6l2.4-8z"/></svg>
            <span class="inline-block">Nearest Airport<br>LGBI Guwahati Airport</span>
          </span>
        </div>
        <div class="flex-fill">
          <span class="d-flex align-items-center px-3 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="text-white d-inline-block mr-2" viewBox="0 0 20 20"><path d="M12 18H8l-2 2H3l2-2a2 2 0 0 1-2-2V2c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2l2 2h-3l-2-2zM5 5v6h10V5H5zm1.5 11a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm7 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM8 2v1h4V2H8z"/></svg>
            <span class="inline-block">Nearest Railhead<br>Kokrajhar | Bongaigaon Train Station</span>
          </span>
        </div>

        <div class="flex-fill">
          <span class="d-flex align-items-center px-3 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="text-white d-inline-block mr-2" viewBox="0 0 20 20"><path d="M2 14v-3H1a1 1 0 0 1-1-1 1 1 0 0 1 1-1h1l4-7h8l4 7h1a1 1 0 0 1 1 1 1 1 0 0 1-1 1h-1v6a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H5v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-3zm13.86-5L13 4H7L4.14 9h11.72zM5.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm9 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/></svg>
            <span class="inline-block">By Road<br>10.5km From NH27 Karigaon through SH14</span>
          </span>
        </div>
      </div>
    </div>
  </section>

  <div class="map-container border-bottom">
    <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d57159.89602352124!2d90.24765542932573!3d26.43981691707083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0x37586031ae5ae7ff%3A0x62a4f52cd1572498!2sKokrajhar%2C%20Assam%20783370!3m2!1d26.4014362!2d90.266699!4m5!1s0x3758f4d277d13e8d%3A0x233749495bfdb465!2sCentral%20Institute%20of%20Technology%2C%20PO%3A%20Rangalikhata%2C%20Dist%3A%20Kokrajhar%2C%20BTAD%2C%20Assam%20783370%2C%20India!3m2!1d26.4780512!2d90.3026385!5e0!3m2!1sen!2sin!4v1572425205720!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
  </div>
  @include('layouts.partials.footer')
@endsection

<!-- Custom Scripts -->
@section('scripts')
<script type="text/javascript">

</script>
@endsection
