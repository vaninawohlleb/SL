<li class="project-sl">
  <div class="project__info">
    <div class="info__category">
      <img class="info__img" src="{{ $project->image_url }}" />
      <h4>{{ $project->category_name }}</h4>
    </div>
    <div class="info__title">
      <a href="{{ $project->url }}">
        <h3>{{ $project->title }}</h3>
      </a>
    </div>
  </div>
</li>
  