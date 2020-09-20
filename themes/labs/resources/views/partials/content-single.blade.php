<article @php post_class() @endphp>
  <div class="wrapper--single post">
    <div class="post--header feature">
      <h2>{!! get_the_title() !!}</h2>
      @include('partials/entry-meta')
      <p>{{ the_excerpt() }}</p>
    </div>
    
    <div class="feature--img">
      <img src="{{ get_the_post_thumbnail_url() }}" />
    </div>
  </div>

  <div class="post--content">
    @php the_content() @endphp
  </div>
</article>
