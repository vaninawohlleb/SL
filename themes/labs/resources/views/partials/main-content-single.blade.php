<div class="wrapper--project">
  <div class="project__main feature">
    <hgroup>
      <a href="{{ $primary_category_link }}">
        <p>{{ $primary_category->name }}</p>
      </a>
      <h2 class="entry-title">{!! get_the_title() !!}</h2>
      <!-- @include('partials/entry-meta') -->
    </hgroup>

    <p>{!! $summary !!}</p>
    <h6>{{ $authors }}</h6>
    <h6>{{ $meta_information }}<h6>

    <h3><a class="read-more" href="{{ $link_to_paper ?? null }}" target="_blank">
      Read the Research
    </a></h3>
  </div>

  <ul class="project--extra">
    <h3>Key Findings</h3>
    <li class="findings">{{ $key_finding_1 }}</li>
    <li class="findings">{{ $key_finding_2 }}</li>
    <li class="findings">{{ $key_finding_3 }}</li>
    <li class="findings">{{ $key_finding_4 }}</li>
  </ul>
</div>