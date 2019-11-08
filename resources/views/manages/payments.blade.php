@extends('layouts.manage')
@section('title', 'Payments')

@section('content')
<section class="overflow-hidden d-block">
  <div class="container">
    <div class="py-5">
      <div class="mb-2">
        <a href="{{ route('users.export') }}" class="btn btn-outline-primary"> <i class="fa fa-file-excel-o"></i>  Export</a>
      </div>
      <div class="card">
        <div class="card-header h6">NEILS 2020 PAYMENTS</div>
        <table class="table rounded mb-0 card-body">
          <thead>
            <tr class="">
              <th class="py-1 px-1 text-center">#</th>
              <th class="py-1 px-1">PaymentID</th>
              <th class="py-1 px-1 text-right">Amount</th>
              <th class="py-1 px-1 text-right">Fees</th>
              <th class="py-1 px-1">Participant</th>
              <th class="py-1 px-1 text-right">Email</th>
              <th class="py-1 px-1 text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($payments as $key => $payment)
              <tr class="cursor-ponter">
                <td class="py-1 px-1 text-center">{{ $key + 1 }}</td>
                <td class="py-1 px-1">{{ $payment->paymentId }}</td>
                <td class="py-1 px-1 text-right">{{ $payment->amount }}</td>
                <td class="py-1 px-1 text-right">{{ $payment->fees }}</td>
                <td class="py-1 px-1">{{ $payment->buyer_name }}</td>
                <td class="py-1 px-1 text-right">{{ $payment->buyer_email }}</td>
                <td class="py-1 px-1 text-center"> <a href="{{ route('manages.participants.view', $payment->user->id) }}" class="" target="_blank">View</a> </td>
              </tr>
            @endforeach
            <tr class="cursor-ponter">
              <th class="py-1 px-1 text-right" colspan="2">Total (INR)</th>
              <th class="py-1 px-1 text-right">{{ $payments->sum('amount') }}</th>
              <th class="py-1 px-1 text-right">{{ $payments->sum('fees') }}</th>
              <td class="py-1 px-1">&nbsp;</td>
              <td class="py-1 px-1 text-right">&nbsp;</td>
              <td class="py-1 px-1 text-center">&nbsp;</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection
