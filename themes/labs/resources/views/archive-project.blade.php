@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <ul>
    @foreach($projects as $project)
      @include('partials.project-in-list')
    @endforeach
  </ul>
  
@endsection
