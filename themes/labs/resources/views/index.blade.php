@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="wrapper--features">
    @foreach($feature as $feature)
      @include('partials.feature')
      @if($loop->index = 1)
        @break
      @endif
    @endforeach
  
    <div class="wrapper--feature-slider">
      <h4 class="underline">Active Projects</h4>
      <ul class="slider-projects">
        @foreach($projects as $project)
          @if($project->active === 'yes')
            @include('partials.project-in-slider')
            @if($loop->index == 3)
              @break
            @endif
          @endif
        @endforeach
      </ul>
      <div class="nav">
        @foreach($projects as $project)
          @if($project->active === 'yes')
            <span>dot</span>
            @if($loop->index == 3)
              @break
            @endif
          @endif
        @endforeach
      </div>
    </div>
  </div>

  <div class="wrapper--processes">
    <ul class="processes">
      @foreach($processes as $process)
        @include('partials.process-in-list')
      @endforeach
    </ul>
  </div>

  <div class="wrapper--projects">
    <ul class="projects">
      @foreach($projects as $project)
        @include('partials.project-in-list')
        @if($loop->index == 3)
          @break
        @endif
      @endforeach
    </ul>
  </div>

  <div class="wrapper--products-sl">
    <div class="products-sl__heading">
      <h4 class="underline">Products We Built</h4>
    </div>
    <ul class="slider-products">
      @foreach($products as $product)
        @include('partials.product-in-slider')
      @endforeach
    </ul>
    <div class="controls">
      <button class="prevButton">
        <img class="rotate prev" src="@asset('images/dashicons_arrow-left.svg')" />
      </button>
      <button class="nextButton">
        <img class="nxt" src="@asset('images/dashicons_arrow-left.svg')" />
      </button>
    </div>
  </div>

    <div class="wrapper--team">
    <ul class="team">
      @foreach ($team as $member)
        @include('partials.member-in-list')
        @if($loop->index == 3)
          @break
        @endif
      @endforeach
    </ul>
  </div>
    
  {!! get_the_posts_navigation() !!}
@endsection
