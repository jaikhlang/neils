@extends('layouts.app')
@section('title', 'Registration Success')
@section('stylesheets')

@endsection
@section('content')
<section id="apply" class="border-top">
  <div class="container">
      <div class="d-block text-center">
        <div class="py-md-5">
          @if (session('message'))
              <div class="alert alert-success" role="alert">
                  {{ session('message') }}
              </div>
          @endif
          <div class="font-weight-bold h4 pt-md-5">
            Successfully registered for NEILS 2020!!
          </div>
          <div class="">
            <span class="d-block mb-2">We look forward to welcoming you to Kokrajhar in February!</span>
            <a href="{{ route('application.show') }}" class="btn btn-outline-primary">Print Application</a>
          </div>
        </div>
      </div>
  </div>
</section>
@endsection
