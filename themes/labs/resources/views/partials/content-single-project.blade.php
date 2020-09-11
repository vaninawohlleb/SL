<article @php post_class() @endphp>
  @include('partials.main-content-single')
  <ul>
    @include('partials.related-projects')
  </ul>

  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
