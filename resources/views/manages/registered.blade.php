@extends('layouts.manage')
@section('title', 'Participants Registered')

@section('content')
<section class="overflow-hidden d-block">
  <div class="container">
    <div class="py-5">
      <span class="d-block h6">Participants of NEILS 2020</span>
      <div class="bg-white rounded border-right border-left">
        <table class="table rounded mb-0">
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
              <tr class="border-bottom">
                <td class="py-1 px-1 text-center">{{ $key + 1 }}</td>
                <td class="py-1 px-1">{{ $participant->firstname .' '.$participant->lastname }}</td>
                <td class="py-1 px-1">{{ $participant->participation_category == 'presenter' ? 'Presenter' : 'Participant' }}</td>
                <td class="py-1 px-1">{{ $participant->country }}</td>
                <td class="py-1 px-1">Unpaid</td>
                <td class="py-1 px-1 text-right">{{ $participant->calculateFee() }}</td>
                <td class="py-1 px-1 text-center"> <a href="{{ route('manages.participants.view', $participant->id) }}" class="">View</a> </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection
