@extends('layouts.app')
@section('content')
<section class="hero">
    <div class="hero-copy">
        <div class="eyebrow">Luxury 3D Bedsheets</div>
        <h1>Transform Your Bedroom<br>with <em>3D Elegance</em></h1>
        <p>Discover premium bedsheet designs with stunning 3D floral patterns, crafted for comfort and style.</p>
        <a class="btn" href="{{ route('products.index') }}">{{ __('messages.shop_collection') }} →</a>
    </div>
</section>

<section class="features">
    <span>✿ Premium Quality Fabric</span>
    <span>✿ 3D Realistic Designs</span>
    <span>🚚 Delivery Across Oman</span>
    <span>✓ Secure Payment</span>
    <span>☏ WhatsApp Order</span>
</section>

<section class="section">
    <div class="section-head">
        <div><small>OUR COLLECTION</small><h2>{{ __('messages.premium') }}</h2><p>Unique designs. Premium quality. Made for your home in Oman.</p></div>
        <a class="btn outline" href="{{ route('products.index') }}">{{ __('messages.shop') }}</a>
    </div>
    <div class="grid">
        @foreach($products as $product)
            @include('products.card', ['product' => $product])
        @endforeach
    </div>
</section>
@endsection
