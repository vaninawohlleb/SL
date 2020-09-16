<article @php post_class() @endphp>
  @include('partials.main-content-single')

   <div class="wrapper--projects">
    <h4 class="underline">Related Projects</h4>
    <ul class="projects">
      @foreach ($related_projects as $project)
        @include('partials.project-in-list')
      @endforeach
    </ul>
  </div>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
</article>
