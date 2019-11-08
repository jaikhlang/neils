@extends('layouts.manage')
@section('title', 'Participants Paid')

@section('content')
<section class="overflow-hidden d-block">
  <div class="container">
    <div class="py-5">
      <div class="mb-2">
        <a href="{{ route('users.export') }}" class="btn btn-outline-primary"> <i class="fa fa-file-excel-o"></i>  Export</a>
      </div>
      <div class="card">
        <div class="card-header h6">NEILS 2020 PARTICIPANTS</div>
        <table class="table rounded mb-0 card-body">
          <thead>
            <tr class="">
              <th class="py-1 px-1 text-center">#</th>
              <th class="py-1 px-1">Name</th>
              <th class="py-1 px-1">Type</th>
              <th class="py-1 px-1">Country</th>
              <th class="py-1 px-1">PaymentID</th>
              <th class="py-1 px-1 text-right">Amount</th>
              <th class="py-1 px-1 text-center">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($participants as $key => $participant)
              <tr class="cursor-ponter">
                <td class="py-1 px-1 text-center">{{ $key + 1 }}</td>
                <td class="py-1 px-1">{{ $participant->firstname .' '.$participant->lastname }}</td>
                <td class="py-1 px-1">{{ $participant->participation_category == 'presenter' ? 'Presenter' : 'Participant' }}</td>
                <td class="py-1 px-1">{{ $participant->country }}</td>
                <td class="py-1 px-1">{{ $participant->payment->paymentId }}</td>
                <td class="py-1 px-1 text-right">{{ $participant->payment->amount }}</td>
                <td class="py-1 px-1 text-center"> <a href="{{ route('manages.participants.view', $participant->id) }}" class="" target="_blank">View</a> </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection
