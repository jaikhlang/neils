@extends('layouts.app')
@section('title', 'Register')
@section('metatags')
  <meta name="keywords" content="register, registration, conference registration, NEILS registration">
  <meta name="description" content="Register for NEILS Conference 2020. Registration is open from first week of November 2019.">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card my-5">
                <div class="card-header d-flex justify-content-between">
                  <div>{{ __('Register') }}</div>
                  <div class="text-danger text-right">REGISTRATION WILL BE OPEN FROM 01 NOV 2022</div>
                </div>
                <div class="card-body">

                  <!-- <div class="text-danger text-center py-5">
                    Registration Closed!!
                  </div> -->
                  <form method="POST" class="" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

                                @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="card my-5">
                <div class="card-header">
                  <div>{{ __('Steps to Register for NEILS12 Conference') }}</div>
                </div>
                <div class="card-body">
                  <div class="border-bottom mb-2">
                    Step 1. Register at <a href="https://neils.org.in/register" target="_blank" class="text-decoration-none">https://neils.org.in/register</a>
                  </div>

                  <div class="border-bottom mb-2">
                    Step 2. Make payment at <a href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm?coprID=867463" target="_blank" class="text-decoration-none">https://www.onlinesbi.sbi/sbicollect/icollecthome.htm?coprID=867463</a>
                    <div class="">
                      <i>Instructions for SBI Collect Payment: <a href="{{ asset('uploads/Instructions-for-SBI-Collect-Payment.pdf') }}" class="text-decoration-none" target="_blank">Instructions</a></i>
                    </div>
                  </div>

                  <div class="border-bottom mb-2">
                    Step 3. Enter payment details and upload payment receipt obtained in step 2.
                  </div>

                  <div class="">
                    Step 4. Registration done.
                  </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
