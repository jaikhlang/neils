@extends('layouts.manage')
@section('title', 'Dashboard')

@section('content')
<section class="overflow-hidden d-block">
  <div class="container">
    <div class="py-5">
      <div class="mb-4 d-md-flex justify-content-between">
        <a href="{{ route('manages.registered') }}" class="d-inline-block bg-white rounded px-4 py-4 border text-decoration-none text-right mb-2">
          <span class="d-block text-dark h4">{{ $unpaid }} <span class="">Participant</span></span>
          <span class="d-block text-dark">Applied (Unpaid)</span>
        </a>

        <a href="{{ route('manages.participants') }}" class="d-inline-block bg-white rounded px-4 py-4 border text-decoration-none text-right mb-2">
          <span class="d-block text-dark h4">{{ $paid }} <span class="">Total Participants</span></span>
          <span class="d-block text-dark">Registered (Paid)</span>
        </a>

        <a href="" class="d-inline-block bg-white rounded px-4 py-4 border text-decoration-none text-right mb-2">
          <span class="d-block text-dark h4">{{ $presenter }} <span class="">Presenters/Co-Presenters</span></span>
          <span class="d-block text-dark">Registered (Paid)</span>
        </a>

        <a href="" class="d-inline-block bg-white rounded px-4 py-4 border text-decoration-none text-right mb-2">
          <span class="d-block text-dark h4">{{ $participant }} <span class="">Only Participation</span></span>
          <span class="d-block text-dark">Registered (Paid)</span>
        </a>
      </div>

      <div class="mb-4 bg-white rounded border-top border-right border-left">
        @foreach ($categories as $key => $category)
          <div class="px-4 py-2 d-block border-bottom d-md-flex justify-content-between">
            <span class="d-block flex-grow-1 text-left">{{ $category->name }}</span>
            {{-- <span class="d-block text-left mr-2">{{ $category->users->where('participation_category', 'presenter')->count() }} Presenter + </span> --}}
            {{-- <span class="d-block text-left mr-2"> {{ $category->users->where('participation_category', 'nonpresenter')->count() }} Only Participation = </span> --}}
            <span class="d-block ml-2"> {{ $category->users->where('status', 'UNPAID')->count() }} Participants (UNPAID)</span>
            <span class="d-block ml-2"> + </span>
            <span class="d-block ml-2"> {{ $category->users->where('status', 'PAID')->count() }} Participants (PAID)</span>
            <span class="d-block ml-2"> = </span>
            <span class="d-block ml-2"> {{ $category->users->where('status', 'UNPAID')->count() + $category->users->where('status', 'PAID')->count() }} </span>
          </div>
        @endforeach
      </div>

      <div class="">
        <span class="d-block">Total Payments Collected: {{ $payments->sum('amount') }} INR (Including Gateway Fees)</span>
      </div>
    </div>

  </div>
</section>
@endsection
