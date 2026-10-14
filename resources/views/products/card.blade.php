<article class="product-card">
    <a href="{{ route('products.show', $product) }}">
        <img src="{{ asset($product->image ?: 'images/hero.png') }}" alt="{{ $product->name }}">
    </a>
    <div class="card-body">
        <h3>{{ $product->name }}</h3>
        <p class="price">OMR {{ number_format($product->price, 2) }}</p>
        <form action="{{ route('cart.add', $product) }}" method="post">
            @csrf
            <button class="btn small" type="submit">{{ __('messages.add_to_cart') }}</button>
        </form>
    </div>
</article>
