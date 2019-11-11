@extends('layouts.manage')
@section('title', 'View')
@section('stylesheets')

@endsection
@section('content')
<section id="apply" class="border-top">
  <div class="container">
      <div class="row justify-content-between">
          <div class="col-md-8 py-5">
            <div class="mb-3">
              <span class="font-weight-bold h4 d-block">NEILS CONFERENCE 2020</span>
              <span class="h6 d-block">APPLICATION</span>
            </div>
              <div class="card">
                  <div class="card-body">
                      <form class="" action="" method="">
                        <div class="mb-2">
                          <label for="name">Full Name</label>
                          <input type="text" name="name" class="form-control" value="{{ $user->firstname }} {{ $user->lastname }}" readonly>
                        </div>
                        <div class="mb-2 row">
                          <div class="col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
                          </div>
                          <div class="col-md-6">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $user->phone }}" maxlength="10" readonly>
                          </div>
                        </div>
                        <div class="mb-2 row">
                          <div class="col-md-6">
                            <div class="mb-2">
                              <label for="gender">Gender</label>
                              <input type="text" name="" class="form-control" style="text-transform: capitalize;" value="{{ $user->gender }}" readonly>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <!-- Image -->
                          </div>
                        </div>

                        <div class="mb-2 row">
                          <div class="col-md-6">
                            <div class="mb-2">
                              <label for="country">Country</label>
                              <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ $user->country }}"  readonly>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="">
                              <label for="country">Passport Number</label>
                              <input type="text" name="country" class="form-control @error('country') is-invalid @enderror" value="{{ $user->passport_number }}"  readonly>
                            </div>
                          </div>
                        </div>

                        <div class="mb-2">
                          <label for="address">Address</label>
                          <textarea name="address" class="form-control @error('address') is-invalid @enderror"   readonly>{{ $user->address }}</textarea>
                        </div>

                        <div class="mb-2">
                          <label for="affiliation">Affiliation</label>
                          <input type="text" name="affiliation" class="form-control @error('affiliation') is-invalid @enderror" value="{{ $user->affiliation }}" readonly>
                        </div>

                        <div class="mb-2">
                          <label for="code_no">Participant Category</label>
                          <input type="text" name="" class="form-control" value="{{ $user->category->name }}" readonly>
                        </div>
                        @if($user->category->code_no == 1)
                        <div class="mb-2">
                          <label for="document_url" class="d-block">Evidence (Letter from the Head of the Department)</label>
                          <a href="{{ asset($user->document_url) }}" class="btn btn-outline-primary">Attachment</a>
                        </div>
                        @endif

                        <div class="mb-2">
                          <label for="participation_category">Participation Category</label>
                          <input type="text" name="" class="form-control" value="{{ $user->participation_category == 'presenter' ? 'Presenter or Co-presenter' : 'Participant' }}" readonly>
                        </div>

                        <div class="mb-2">
                          <label for="papertitle">Title of the paper (For presenter &amp Co-presenter)</label>
                          <input type="text" name="papertitle" class="form-control" value="{{ $user->papertitle }}" readonly>
                        </div>

                        <div class="mb-2">
                          <label for="remarks">Comments</label>
                          <textarea name="remarks" class="form-control @error('remarks') is-invalid @enderror" readonly>{{ $user->remarks }}</textarea>
                        </div>

                        <div class="">
                          <label for="">Registration Fees</label>
                          @if(!empty($user->payment->amount))
                          <input type="text" name="" class="form-control" value="{{ $user->payment->amount }} INR ({{ $user->payment->paymentId }}) {{ $user->payment->created_at->format('d-m-Y') }}" readonly>
                          @else
                            <input type="text" name="" class="form-control" value="Not Paid" readonly>
                          @endif
                        </div>
                      </form>
                  </div>
              </div>
          </div>
          <div class="col-md-4 py-5">
            <div class="mb-4">
              <a href="{{ route('generate.application', $user->id) }}" class="btn btn-primary" target="_blank">Print Application</a>
            </div>
            @role('superadmin')
            <div class="">
              <a href="{{ route('users.editUser', $user->id) }}" class="btn btn-primary" target="_blank">Edit Application</a>
            </div>
            @endrole
          </div>
      </div>
  </div>
</section>
@endsection
