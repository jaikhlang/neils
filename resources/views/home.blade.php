@extends('layouts.app')

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

                      You are logged in!
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
