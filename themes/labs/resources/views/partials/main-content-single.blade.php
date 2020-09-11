<div class="entry-content">
  <hgroup>
    <p>{{ $primary_category }}</p>
    <h2 class="entry-title">{!! get_the_title() !!}</h2>
    <!-- @include('partials/entry-meta') -->
  </hgroup>

  <h4>{!! $summary !!}</h4>
  <h4>{{ $authors }}</h4>
  <p>{{ $meta_information }}<p>

  <ul>
    <li>{{ $key_finding_1 }}</li>
    <li>{{ $key_finding_2 }}</li>
    <li>{{ $key_finding_3 }}</li>
    <li?>{{ $key_finding_4 }}</li>
  </ul>
  
  <a href="{{ $link_to_paper ?? null }}" target="_blank"><h3>Read the Research</h3></a>
</div>