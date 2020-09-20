@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="wrapper--singles">
    <h3 class="underline">Active and Published Research Projects</h3>

    <ul class="projects">
      @foreach($projects as $project)
        @include('partials.project-in-list')
      @endforeach
    </ul>
  </div>
  
@endsection
