@extends('layouts.app')
@section('title', 'Application')
@section('stylesheets')

@endsection
@section('content')
<section id="apply" class="border-top">
  <div class="container">
      <div class="row justify-content-between">
          <div class="col-md-4 py-5 mt-lg-3">
            <div class="px-3 py-3 mt-lg-5 mb-2 bg-white rounded border border-dark-50">
              <div class="text-center">
                <a href="{{ route('generate.application', Auth::user()->id) }}" class="btn btn-primary" target="_blank">Print Application</a>
                @if(Auth::user()->status == 'UNPAID')
                  <a href="{{ route('participant.billing') }}" class="btn btn-outline-primary" target="_blank">Proceed Payment</a>
                @endif

                @if(Auth::user()->status == 'PAID')
                  <a href="{{ route('generate.invoice', Auth::user()->id) }}" class="btn btn-outline-danger" target="_blank">Payment Invoice</a>
                  <div class="d-block mt-4">
                    <span class="d-block">PAYMENT DETAILS</span>
                    <table class="table mb-0">
                      <tbody>
                        <tr>
                          <td class="text-right">Reference Id:</td>
                          <td class="text-left">{{ $user->payment->paymentId }}</td>
                        </tr>
                        <tr>
                          <td class="text-right">Amount:</td>
                          <td class="text-left">{{ $user->payment->amount }} INR</td>
                        </tr>
                        <tr>
                          <td class="text-right">Amount Paid:</td>
                          <td class="text-left">{{ $user->created_at->diffForHumans() }}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                @endif
              </div>
            </div>
          </div>
          <div class="col-md-8 py-5">
            <div class="mb-3">
              <span class="font-weight-bold h4 d-block">NEILS CONFERENCE 2020</span>
              <span class="h6 d-block">APPLICATION</span>
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
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $user->phone }}" maxlength="15" readonly>
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
                            <div class="d-none">
                            <label for="photo">Photo (200x200) pixels</label>
                            {{-- <img src="{{ url($user->image_url) }}" class="w-50 border d-block" alt=""> --}}
                            </div>
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
                          <textarea name="address" class="form-control @error('address') is-invalid @enderror" rows="3" cols="80"  readonly>{{ $user->address }}</textarea>
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
                        <div class="mb-4">
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

                        <div class="">
                          <label for="remarks">Comments</label>
                          <textarea name="remarks" class="form-control @error('remarks') is-invalid @enderror" rows="3" cols="80" readonly>{{ $user->remarks }}</textarea>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
