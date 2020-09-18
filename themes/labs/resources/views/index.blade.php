@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  <div class="wrapper--features">
    @foreach($features as $feature)
      @if($feature->homepage_section === 'heading')
        @include('partials.feature')
      @endif
    @endforeach
  
    <div class="wrapper--feature-slider">
      <h4 class="underline">Active Research</h4>
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
      <div class="nav-slider">
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
    <a href="/" class="link-index">
      <h4 class="link-index__text">
        Research
      </h4>
      <img src="@asset('images/arrow-right-tiny.svg')" />
    </a>
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
    <a href="/" class="link-index">
      <h4 class="link-index__text">People</h4>
      <img src="@asset('images/arrow-right-tiny.svg')" />
    </a>
    <ul class="team">
      @foreach ($team as $member)
        @include('partials.member-in-list')
        @if($loop->index == 3)
          @break
        @endif
      @endforeach
    </ul>
  </div>

  <div class="wrapper--products-sl">
    <div class="products-sl__heading">
      <a href="/" class="link-index">
        <h4 class="link-index__text">Products</h4>
      <img src="@asset('images/arrow-right-tiny.svg')" />
    </a>
    </div>
    <ul class="products">
      @foreach($products as $product)
        @include('partials.product-in-slider')
      @endforeach
    </ul>
  </div>

  <div class="wrapper--opportunities">
    <ul class="opportunities">
      @foreach($opportunities as $opportunity)
        @include('partials.opportunity-in-list')
      @endforeach
    </ul>
    @foreach($features as $feature)
      @if($feature->homepage_section === 'opportunities')
        @include('partials.feature')
      @endif
    @endforeach
  </div>
    
  {!! get_the_posts_navigation() !!}
@endsection
