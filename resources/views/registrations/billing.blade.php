@extends('layouts.app')
@section('title', 'Billing')
@section('stylesheets')

@endsection
@section('content')
<section id="apply" class="border-top">
  <div class="container">
      <div class="row justify-content-between">
          <div class="col-md-4 py-5">
            <div class="pt-lg-5 mb-2">
              <span class="d-block font-weight-bold">REGISTRATION STEPS</span>
            </div>
            <div class="px-3 py-3 bg-white rounded border border-dark-50">
              <ul class="list-unstyled mb-0">
                <li>1. Register for username and password.</li>
                <li>2. Verify your email.</li>
                <li>3. Login & Proceed Registration.</li>
                <li>4. Fill the registration form.</li>
                <li>5. Preview application & submit.</li>
                <li>6. Payment.</li>
                <li>7. Registration Status.</li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 py-5">
            <div class="mb-3">
              <span class="font-weight-bold h4">NEILS CONFERENCE 2020 REGISTRATION</span>
            </div>
              <div class="card">


                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif


                      <form class="" action="" method="POST">

                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="mb-4">
                          <label for="name">Full Name</label>
                          <input type="text" name="name" class="form-control" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" readonly>
                        </div>



                        <div class="mb-4 custom-control custom-checkbox">
                          <input type="checkbox" name="subscription" class="custom-control-input" id="subscription">
                          <label class="custom-control-label" for="subscription">Would you like to add your email to NEILS mailing list</label>
                        </div>

                        <div class="mb-4 custom-control custom-checkbox">
                          <input type="checkbox" name="disclaimer" v-model="acceptTermsNcondition" class="custom-control-input" id="disclaimer">
                          <label class="custom-control-label" for="disclaimer">“I hereby confirm that I expect to participate in the conference. If for any
                            currently unforeseeable reason, it turns out that I will not be able to
                            participate, I will immediately let the organizers know.”
                          </label>
                        </div>

                        <div class="mb-4">
                          <button type="button" v-if="!acceptTermsNcondition" class="btn btn-outline-secondary btn-lg cursor-pointer" disabled>Save & Continue</button>
                          <input type="submit" name="" v-if="acceptTermsNcondition" class="btn btn-outline-success btn-lg" value="Save & Continue">
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
