@extends('layouts.app')
@section('content')
<section class="detail">
    <img src="{{ asset($product->image ?: 'images/hero.png') }}" alt="{{ $product->name }}">
    <div>
        <small>{{ strtoupper($product->category) }}</small>
        <h1>{{ $product->name }}</h1>
        <p class="big-price">OMR {{ number_format($product->price, 2) }}</p>
        <p>{{ $product->description }}</p>
        <form action="{{ route('cart.add', $product) }}" method="post" class="buy">
            @csrf
            <input type="number" name="qty" value="1" min="1">
            <button class="btn" type="submit">{{ __('messages.add_to_cart') }}</button>
        </form>
        <a class="whatsapp" target="_blank" href="https://wa.me/{{ env('WHATSAPP_NUMBER') }}?text={{ urlencode('Hello HM Enterprise, I want to order: '.$product->name.' | OMR '.$product->price) }}">☏ {{ __('messages.whatsapp_order') }}</a>
    </div>
</section>
@endsection
