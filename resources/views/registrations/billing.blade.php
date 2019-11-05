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
              <a href="{{ route('application.show') }}" class="btn btn-outline-success  mb-2" target="_blank">View Application</a>
              <span class="d-block font-weight-bold">REGISTRATION FEES</span>
            </div>
            <div class="bg-white ">
              <table class="table border text-danger">
                <tbody>
                  <tr class="">
                    <td class="px-4 py-1 text-nowrap">Rs. 700</td>
                    <td class="px-4 py-1 border-left">SAARC student without financial support.</td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 py-1 text-nowrap">Rs. 1800</td>
                    <td class="px-4 py-1 border-left">SAARC student with financial support</td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 py-1 text-nowrap">Rs. 2500</td>
                    <td class="px-4 py-1 border-left">SAARC non-student (includes teaching faculty pursuing PhD) or International student</td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 py-1 text-nowrap">Rs. 4500</td>
                    <td class="px-4 py-1 border-left">International non-student</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="">
              <span class="d-block text-black-50 h6">*Note: For any difficulties regarding payments, mail us at <a href="mailto:b.brahma@cit.ac.in" class="text-decoration-none text-black-50">b.brahma@cit.ac.in</a></span>
            </div>
          </div>
          <div class="col-md-8 py-5">
            <div class="mb-3">
              <span class="font-weight-bold h4">NEILS CONFERENCE 2020 REGISTRATION</span>
            </div>
              <div class="card mb-2">
                  <div class="card-body">
                      @if (session('message'))
                          <div class="alert alert-success" role="alert">
                              {{ session('message') }}
                          </div>
                      @endif

                      <form class="" action="{{ route('payment.pay') }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                        <div class="mb-2">
                          <label for="name">Participant/Presenter/Co-presenter</label>
                          <input type="text" name="name" class="form-control" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" readonly>
                        </div>

                        <div class="mb-2">
                          <label for="name">Participant Category</label>
                          <input type="text" name="name" class="form-control" value="{{ Auth::user()->category->name }}" readonly>
                        </div>

                        <div class="mb-3">
                          <label for="name">Registration Fee</label>
                          <input type="text" name="name" class="form-control" value="{{ Auth::user()->calculateFee() }} INR" readonly>
                        </div>
                        <div class="">
                          <input type="submit" name="" class="btn btn-success btn-lg" value="Proceed Payment">
                        </div>
                      </form>
                  </div>
              </div>
              <div class="">
                <span class="d-block h6 text-black-50">Payments will be processed in Indian Rupees only. Although we do not support payments in alternate currencies, we do support payments from cards issued outside India. Participants outside India will see the amoint in INR.</span>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
