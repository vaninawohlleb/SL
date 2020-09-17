@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="wrapper--projects category">
    <h3 class="underline">@php single_cat_title() @endphp</h3>
    <ul class="projects">
      @foreach($category_projects as $project)
        @include('partials.project-in-list')
      @endforeach
    </ul>
  </div>
  
@endsection
