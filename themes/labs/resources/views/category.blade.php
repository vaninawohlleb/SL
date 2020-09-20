@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  <div class="wrapper--singles category">
    <hgroup class="category__info">
      <h3 class="underline">{{ $category_object->category_name }}</h3>
      <p>{!! $category_object->category_description !!}</p>
    </hgroup>
    
    <div class="projects--list">
      <ul class="projects">
        @foreach($category_projects as $project)
          @include('partials.project-in-list')
        @endforeach
      </ul>
    </div>
  </div>
  
@endsection
