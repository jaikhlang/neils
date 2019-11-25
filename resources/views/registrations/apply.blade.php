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
                      <form class="" action="{{ route('participant.store', Auth::user()) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}
                        <div class="mb-2">
                          <label for="name">Full Name</label>
                          <input type="text" name="name" class="form-control" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" readonly>
                        </div>

                        <div class="mb-2 row">
                          <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}" readonly>
                          </div>
                          <div class="col-md-6">
                            <label for="phone">Phone (Please add country code to your phone number. Eg: +91 for Indian phone numbers.)<span class="text-danger">*</span></label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" maxlength="15" required autofocus>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>

                        <div class="mb-2 row">
                          <div class="col-md-6">
                            <label for="gender">Gender <span class="text-danger">*</span></label>
                            <select class="form-control @error('gender') is-invalid @enderror" name="gender" required>
                              <option value="" selected disabled>Select Gender</option>
                              <option value="male">Male</option>
                              <option value="female">Female</option>
                              <option value="other">Other</option>
                            </select>
                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                          <div class="col-md-6 d-none">
                            <label for="photo">Photo (200x200) pixels</label>
                            <input type="file" name="photo" class="form-control-file @error('photo') is-invalid @enderror" value="{{ old('photo') }}">
                            @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>

                        <div class="mb-2 row">
                          <div class="col-md-6">
                            <label for="country">Country of citizenship <span class="text-danger">*</span></label>
                            <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ old('country') }}" required>
                            @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                          <div class="col-md-6">
                            <label for="passportnumber">Passport Number (For foreign participants)</label>
                            <input type="text" name="passportnumber" class="form-control @error('passportnumber') is-invalid @enderror" value="{{ old('passportnumber') }}">
                            @error('passportnumber')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                        </div>

                        <div class="mb-2">
                          <label for="address">Address <span class="text-danger">*</span></label>
                          <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3" cols="80" required>{{ old('address') }}</textarea>
                          @error('address')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="mb-2">
                          <label for="affiliation">Affiliation <span class="text-danger">*</span></label>
                          <input type="text" name="affiliation" class="form-control @error('affiliation') is-invalid @enderror" value="{{ old('affiliation') }}" required>
                            @error('affiliation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="mb-2">
                          <label for="code_no">Participant Category <span class="text-danger">*</span></label>
                          <select id="category" class="form-control @error('code_no') is-invalid @enderror" name="code_no" v-model="category" required>
                            <option value="null" selected disabled>Select Participant Category</option>
                            @foreach ($categories as $key => $category)
                              <option value="{{ $category->code_no }}">{{ $category->name }}</option>
                            @endforeach
                          </select>
                          @error('code_no')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="mb-2 pb-2" v-if="documentRequired">
                          <label for="document_url">Please provide evidence such as a letter from the Head of the Department. <span class="text-danger">*</span></label>
                          <input type="file" name="document_url" class="form-control-file @error('document_url') is-invalid @enderror" value="{{ old('document_url') }}">
                          @error('document_url')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>

                        <div class="mb-2">
                          <label for="participation_category">Participation Category <span class="text-danger">*</span></label>
                          <select id="participation_category" class="form-control @error('participation_category') is-invalid @enderror" name="participation_category" v-model="participationCategory">
                            <option value="null" selected disabled>Participation Type</option>
                            <option value="presenter">Presenter or co-presenter.</option>
                            <option value="nonpresenter">Non-presenter.</option>
                          </select>
                          @error('participation_category')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>



                        <div class="mb-2" v-if="participationCategory === 'presenter'">
                          <label for="papertitle">Title of the paper (For presenter &amp Co-presenter) <span class="text-danger">*</span></label>
                          <input type="text" name="papertitle" class="form-control @error('papertitle') is-invalid @enderror" value="{{ old('papertitle') }}">
                          @error('papertitle')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                          @enderror
                        </div>

                        <div class="mb-2">
                          <label for="remarks">Comments</label>
                          <textarea name="remarks" class="form-control @error('remarks') is-invalid @enderror" rows="3" cols="80">{{ old('remarks') }}</textarea>
                            @error('remarks')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                            @enderror
                        </div>
                        <div class="mb-2">
                          <span class="d-block text-danger">Note: All the fields marked with * are mandatory.</span>
                        </div>

                        <div class="mb-2 custom-control custom-checkbox">
                          <input type="checkbox" name="subscription" class="custom-control-input" id="subscription">
                          <label class="custom-control-label" for="subscription">Would you like to add your email to NEILS mailing list</label>
                        </div>

                        <div class="mb-2 custom-control custom-checkbox">
                          <input type="checkbox" name="disclaimer" v-model="acceptTermsNcondition" class="custom-control-input" id="disclaimer">
                          <label class="custom-control-label" for="disclaimer">“I hereby confirm that I expect to participate in the conference. If for any
                            currently unforeseeable reason, it turns out that I will not be able to
                            participate, I will immediately let the organizers know.”
                          </label>
                        </div>

                        <div class="mb-2">
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
