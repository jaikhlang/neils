@extends('layouts.app')

@section('title', 'Home')
@section('content')
<section id="" class="border-top">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card my-5">
                  <div class="card-header">Hi! {{ Auth::user()->firstname }}</div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif


                      <span class="d-block my-4">You are logged in!</span>
                      @if(Auth::user()->status == 'PAID')
                      <a href="{{ route('apply') }}" class="btn btn-primary btn-lg">You are already registered!! Go to application</a>
                      @else
                      <a href="{{ route('apply') }}" class="btn btn-primary btn-lg">Proceed to Registration</a>
                      @endif
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
