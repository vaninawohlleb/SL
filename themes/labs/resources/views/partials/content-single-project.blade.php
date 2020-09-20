<article @php post_class() @endphp>
  @include('partials.main-content-single')

   <div class="wrapper--projects">
    @if(count($related_projects) > 0)
      <h4 class="underline">Related Projects</h4>
    @endif
    <ul class="projects">
      @foreach ($related_projects as $project)
        @include('partials.project-in-list')
      @endforeach
    </ul>
  </div>
</article>
