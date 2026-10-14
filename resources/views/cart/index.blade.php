@extends('layouts.app')
@section('content')
<section class="section narrow">
    <h1>{{ __('messages.cart') }}</h1>
    @forelse($cart as $item)
        <div class="cart-row">
            <img src="{{ asset($item['image'] ?: 'images/hero.png') }}" alt="">
            <div><strong>{{ $item['name'] }}</strong><p>OMR {{ number_format($item['price'],2) }}</p></div>
            <form action="{{ route('cart.update', $item['id']) }}" method="post">
                @csrf @method('PATCH')
                <input type="number" name="qty" value="{{ $item['qty'] }}" min="1">
                <button>Update</button>
            </form>
            <strong>OMR {{ number_format($item['price']*$item['qty'],2) }}</strong>
            <form action="{{ route('cart.remove', $item['id']) }}" method="post">@csrf @method('DELETE')<button>✕</button></form>
        </div>
    @empty
        <p>{{ __('messages.cart_empty') }}</p>
    @endforelse

    @if($cart)
        <div class="cart-total"><strong>{{ __('messages.total') }}: OMR {{ number_format($total,2) }}</strong><a class="btn" href="{{ route('checkout') }}">{{ __('messages.checkout') }}</a></div>
    @endif
</section>
@endsection
