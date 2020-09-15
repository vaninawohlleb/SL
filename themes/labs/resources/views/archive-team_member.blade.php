@extends('layouts.app')

@section('content')
  @include('partials.page-header')

<div class="wrapper--team">
  <ul class="team three-col">
    @foreach ($team as $member)
      @include('partials.member-in-list')
    @endforeach
  </ul>
</div>
  
@endsection
