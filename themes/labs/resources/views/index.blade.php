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
            <span class="dot">&#8226</span>
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

  <div class="wrapper--team">
    <h4 class="underline">Our Team</h4>
    <ul class="team">
      @foreach ($team as $member)
        @include('partials.member-in-list')
        @if($loop->index == 3)
          @break
        @endif
      @endforeach
    </ul>
  </div>

  <div class="wrapper--opportunities">
    <ul class="opportunities">
      @foreach($opportunities as $opportunity)
        @include('partials.opportunity-in-list')
      @endforeach
    </ul>
    <!-- Make this dynamic -->
    <div class="opportunities__info">
      <h3 class="title">Join Us Today</h3>
      <p>Reach out to info@significancelabs.org, with your resume and cover letter.<p>
    </div>
  </div>

  <div class="wrapper--products-sl">
    <div class="products-sl__heading">
      <h4 class="underline">Products We Built</h4>
    </div>
    <ul class="products">
      @foreach($products as $product)
        @include('partials.product-in-slider')
      @endforeach
    </ul>
  </div>
    
  {!! get_the_posts_navigation() !!}
@endsection
