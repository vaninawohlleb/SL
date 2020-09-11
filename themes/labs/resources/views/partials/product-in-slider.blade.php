<li class="product">
  <div class="product__bordered">
    <div class="product__img">
      <img src="{{ $product->image_url }}" />
    </div>
    <div class="product__info">
      <h5>{{ $product->title }}</h5>
      @if ($product->url)
        <p>website:
          <a href="{{ $product->url }}">{{ $product->url }}</a>
        </p>
      @endif
      <p>{!! $product->text !!}</p>
    </div>
  </div>
</li>
  