@extends('layouts.app')
@section('title', 'Application')
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
                <li>2. Verify your account through the link sent to your email.</li>
                <li>3. Login / proceed to registration.</li>
                <li>4. Fill the registration form.</li>
                <li>5. Preview/edit application & submit.</li>
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


                      <form class="" action="{{ route('participant.confirm') }}" method="POST" onsubmit="return confirm('After this operation you can not edit the form. Do you really want to submit the form?');">

                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="mb-4">
                          <label for="name">Full Name</label>
                          <input type="text" name="name" class="form-control" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" readonly>
                        </div>

                        <div class="mb-4 row">
                          <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
                          </div>
                          <div class="col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $user->phone }}" maxlength="10" readonly>
                          </div>
                        </div>

                        <div class="mb-4 row">
                          <div class="col-md-6">
                            <div class="mb-2">
                              <label for="gender">Gender</label>
                              <input type="text" name="" class="form-control" style="text-transform: capitalize;" value="{{ $user->gender }}" readonly>
                            </div>
                            <div class="mb-2">
                              <label for="country">Country</label>
                              <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ $user->country }}"  readonly>
                            </div>
                            <div class="">
                              <label for="country">Passport Number</label>
                              <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ $user->passport_number }}"  readonly>
                            </div>
                          </div>
                          <div class="col-md-6 d-none">
                            {{-- <label for="photo">Photo (200x200) pixels</label> --}}
                            {{-- <img src="{{ url($user->image_url) }}" class="w-50 border d-block" alt=""> --}}
                          </div>
                        </div>

                        <div class="mb-4">
                          <label for="address">Address</label>
                          <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3" cols="80"  readonly>{{ $user->address }}</textarea>
                        </div>

                        <div class="mb-4">
                          <label for="affiliation">Affiliation</label>
                          <input type="text" name="affiliation" class="form-control @error('affiliation') is-invalid @enderror" value="{{ $user->affiliation }}" readonly>
                        </div>

                        <div class="mb-4">
                          <label for="code_no">Participant Category</label>
                          <input type="text" name="" class="form-control" value="{{ $user->category->name }}" readonly>
                        </div>
                        @if($user->category->code_no == 1)
                        <div class="mb-4">
                          <label for="document_url" class="d-block">Evidence (Letter from the Head of the Department)</label>
                          <a href="{{ asset($user->document_url) }}" class="btn btn-outline-primary">Attachment</a>
                        </div>
                        @endif

                        <div class="mb-4">
                          <label for="participation_category">Participation Category</label>
                          <input type="text" name="" class="form-control" value="{{ $user->participation_category == 'presenter' ? 'Presenter or Co-presenter' : 'Participant' }}" readonly>
                        </div>



                        <div class="mb-4">
                          <label for="papertitle">Title of the paper (For presenter &amp Co-presenter)</label>
                          <input type="text" name="papertitle" class="form-control" value="{{ $user->papertitle }}" readonly>
                        </div>

                        <div class="mb-4">
                          <label for="remarks">Comments</label>
                          <textarea name="remarks" class="form-control @error('remarks') is-invalid @enderror" rows="3" cols="80" readonly>{{ $user->remarks }}</textarea>
                        </div>

                        <div class="mb-4 custom-control custom-checkbox">
                          <input type="checkbox" name="subscription" {{ $user->subscription == true ? 'checked' : '' }} class="custom-control-input" id="subscription" readonly>
                          <label class="custom-control-label" for="subscription">Would you like to add your email to NEILS mailing list</label>
                        </div>

                        <div class="mb-4 custom-control custom-checkbox">
                          <input type="checkbox" name="disclaimer" checked class="custom-control-input" id="disclaimer">
                          <label class="custom-control-label" for="disclaimer">“I hereby confirm that I expect to participate in the conference. If for any
                            currently unforeseeable reason, it turns out that I will not be able to
                            participate, I will immediately let the organizers know.”
                          </label>
                        </div>

                        <div class="mb-4">
                          <a href="{{ route('participant.edit', $user) }}" class="btn btn-outline-primary btn-lg">Modify Application</a>
                          <input type="submit" name="" class="btn btn-success btn-lg" value="Confirm & Submit">
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
