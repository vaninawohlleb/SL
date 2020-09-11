@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <ul>
    @foreach ($team as $member)
      @include('partials.member-in-list')
    @endforeach
  </ul>
  
@endsection
