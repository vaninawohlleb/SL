@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="wrapper--projects">
    <ul class="projects">
      @foreach($projects as $project)
        @include('partials.project-in-list')
      @endforeach
    </ul>
  </div>
  
@endsection
