<li class="project {{ $project->active === yes ? 'active' : null }}">
  @if($project->active === 'yes')
    <p class="project__active">active project</p>
  @endif
  <div class="project__info">
    <div class="info__category">
      @if($project->active === 'no')
        <img src="{{ $project->image_url }}" />
      @elseif($project->active === 'yes')
        <img src="{{ $project->inverted_image_url }}" />
      @endif
      <h4>{{ $project->category_name }}</h4>
    </div>
    <div class="info__title">
      <h3>{{ $project->title }}</h3>
    </div>
    <a href="{{ $project->url }}">
      <svg width="135" height="135" viewBox="0 0 135 135" xmlns="http://www.w3.org/2000/svg">
        <path d="M83.4635 94.9927C83.6904 94.9931 83.915 94.9476 84.1238 94.8588C84.3327 94.7701 84.5213 94.64 84.6785 94.4764L109.515 68.7217C109.819 68.4082 109.989 67.9888 109.989 67.5523C109.989 67.1158 109.819 66.6964 109.515 66.3829L84.5705 40.5236C84.4193 40.3545 84.2356 40.2176 84.0303 40.1211C83.825 40.0247 83.6024 39.9705 83.3757 39.962C83.1491 39.9535 82.923 39.9908 82.7111 40.0717C82.4992 40.1525 82.3057 40.2752 82.1423 40.4325C81.9789 40.5898 81.8488 40.7785 81.7599 40.9872C81.6711 41.1958 81.6252 41.4203 81.625 41.6471C81.6248 41.874 81.6704 42.0985 81.759 42.3073C81.8476 42.5161 81.9773 42.705 82.1405 42.8625L105.955 67.5506L82.2485 92.1341C82.0187 92.3725 81.8641 92.6732 81.804 92.9989C81.7439 93.3245 81.7809 93.6606 81.9104 93.9653C82.04 94.2701 82.2563 94.53 82.5324 94.7126C82.8086 94.8953 83.1324 94.9927 83.4635 94.9927Z" fill="fill-current"/>
        <path d="M26.6963 69.2381H108.304C108.751 69.2381 109.181 69.0603 109.497 68.7439C109.813 68.4274 109.991 67.9982 109.991 67.5506C109.991 67.1031 109.813 66.6739 109.497 66.3574C109.181 66.0409 108.751 65.8631 108.304 65.8631H26.6963C26.2487 65.8631 25.8195 66.0409 25.503 66.3574C25.1866 66.6739 25.0088 67.1031 25.0088 67.5506C25.0088 67.9982 25.1866 68.4274 25.503 68.7439C25.8195 69.0603 26.2487 69.2381 26.6963 69.2381Z" fill="fill-current"/>
      </svg>
    </a>
  </div>
</li>
  