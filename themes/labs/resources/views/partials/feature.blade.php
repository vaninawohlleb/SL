@if($feature->homepage_section === 'heading')
  <div class="feature">
    <h1>{{ $feature->title }}</h1>
    <h2>{!! $feature->content !!}</h2>
    <ul class="links">
      <li>
        <a href="{{ $feature->link_1_url }}">
          <h3>{{ $feature->link_1_text }}</h3>
        </a>
      </li>
      <li>
        <a href="{{ $feature->link_2_url }}">
          <h3>{{ $feature->link_2_text }}</h3>
        </a>
      </li>
    </ul>
  </div>
@else
  <div class="feature--small">
    <h3>{{ $feature->title }}</h3>
    <p>{!! $feature->content !!}</p>
  </div>
@endif
  