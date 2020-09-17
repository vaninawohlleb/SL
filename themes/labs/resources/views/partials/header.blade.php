<header class="banner">
  <div class="container">
    <nav class="nav-primary">
      <div class="logo">
        <a href="{{ get_site_url() }}">
          @if(is_home() || is_single())
            <img src="@asset('images/logo-white.png')" />
          @else
            <img src="@asset('images/logo-black.png')" />
          @endif
        </a>
      </div>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
