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
              <a href="{{ route('application.show') }}" class="btn btn-success btn-lg  mb-4" target="_blank">View Application</a>
              <span class="d-block font-weight-bold">REGISTRATION FEES</span>
            </div>
            <div class="bg-white ">
              <table class="table border text-danger">
                <tbody>
                  <tr class="">
                    <td class="px-4 py-1 text-nowrap">Rs. 1000</td>
                    <td class="px-4 py-1 border-left"><strong>SAARC student without</strong> financial support. <span class="text-dark">(please provide evidence such as a letter from the Head of the Department)</span></td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 py-1 text-nowrap">Rs. 2200</td>
                    <td class="px-4 py-1 border-left"><strong>SAARC student with</strong> financial support.</td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 py-1 text-nowrap">Rs. 3200</td>
                    <td class="px-4 py-1 border-left"><strong>SAARC non-student</strong> <span class="text-dark">(includes teaching faculty pursuing PhD) or <strong>International student</strong></span></td>
                  </tr>
                  <tr class="border-top">
                    <td class="px-4 py-1 text-nowrap">Rs. 5500</td>
                    <td class="px-4 py-1 border-left"><strong>International non-student</strong></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="">
              <span class="d-block text-black-50 h6">*Note: For any difficulties regarding payments, mail us at <a href="mailto:krishnaboro08@gmail.com" class="text-decoration-none text-black-50">krishnaboro08@gmail.com</a></span>
            </div>
          </div>
          <div class="col-md-8 py-5">
            <div class="mb-3">
              <span class="font-weight-bold h4">NEILS12 CONFERENCE 2023 REGISTRATION</span>
            </div>

            <form class="" action="{{ route('payment.storePaymentDetails') }}" method="POST" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('POST') }}

              <div class="card mb-4">
                  <div class="card-body">
                      @if (session('message'))
                          <div class="alert alert-success" role="alert">
                              {{ session('message') }}
                          </div>
                      @endif

                      <div class="">
                        <div class="mb-2">
                          <label for="name">Participant/Presenter/Co-presenter Name:</label>
                          <input type="text" name="name" class="form-control" value="{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}" readonly>
                        </div>

                        <div class="mb-2">
                          <label for="category">Participant Category:</label>
                          <input type="text" name="category" class="form-control" value="{{ Auth::user()->category->name }}" readonly>
                        </div>

                        <div class="mb-3">
                          <label for="amount">Registration Fee:</label>
                          <input type="text" name="" class="form-control" value="{{ Auth::user()->calculateFee() }} INR" readonly>
                        </div>
                      </div>
                  </div>
              </div>

              <div class="card mb-4">
                <div class="card-body">
                  <div class="mb-3">
                    <a href="https://www.onlinesbi.sbi/sbicollect/icollecthome.htm?coprID=867463" class="btn btn-danger btn-lg mr-2" target="_blank">Link for payment</a>
                    <a href="{{ asset('uploads/Instructions-for-SBI-Collect-Payment.pdf') }}" class="btn btn-primary btn-lg" target="_blank">Instructions for payment</a>
                  </div>
                </div>
              </div>

              <div class="card mb-4">
                  <div class="card-body">
                        <div class="mb-3">
                          <label for="reference" class="text-danger">Payment Reference No. <span class="text-danger">*</span> </label>
                          <input type="text" name="reference" class="form-control" placeholder="Payment Reference No" value="">
                        </div>

                        <div class="mb-2 pb-2">
                          <label for="document_url" class="text-danger">Upload Payment Receipt. (File should be in .pdf format only) <span class="text-danger">*</span></label>
                          <input type="file" name="document_url" class="form-control-file @error('document_url') is-invalid @enderror" value="{{ old('document_url') }}">
                          @error('document_url')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="mb-3">
                          <input type="submit" class="btn btn-success btn-lg" value="Submit Payment Details">
                        </div>

                      <div class="text-danger"> (*) Marked are mandatory.</div>
                  </div>
              </div>
            </form>
              <div class="">
                <!--span class="d-block h6 text-black-50">Payments will be processed in Indian Rupees only. Although we do not support payments in alternate currencies, we do support payments from cards issued outside India. Participants outside India will see the amoint in INR.</span-->

              </div>
          </div>
      </div>
  </div>
</section>
@endsection
