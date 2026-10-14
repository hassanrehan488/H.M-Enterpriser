@extends('layouts.app')
@section('content')
<section class="section narrow">
    <div class="order-success">
        <div class="check">✓</div>
        <h1>{{ __('messages.order_confirmed') }}</h1>
        <p>{{ __('messages.tracking_id') }}: <strong id="tracking">{{ $order->tracking_id }}</strong></p>
        <button class="btn small" onclick="copyTracking()">Copy Tracking ID</button>
    </div>

    <div class="order-box">
        <h2>{{ __('messages.order_status') }}</h2>
        <div class="timeline">
            @foreach(['pending','processing','shipped','delivered'] as $status)
                <div class="step {{ in_array($order->status, ['processing','shipped','delivered']) && $status === 'pending' ? 'done' : ($order->status === $status ? 'active' : '') }}">
                    <span></span><strong>{{ __('messages.'.$status) }}</strong>
                </div>
            @endforeach
        </div>
        <p><strong>{{ __('messages.customer_name') }}:</strong> {{ $order->customer_name }}</p>
        <p><strong>{{ __('messages.city') }}:</strong> {{ $order->city }}</p>
        <p><strong>{{ __('messages.total') }}:</strong> OMR {{ number_format($order->total,2) }}</p>

        <a class="whatsapp" target="_blank" href="https://wa.me/{{ env('WHATSAPP_NUMBER') }}?text={{ urlencode('Hello HM Enterprise. My order tracking ID is '.$order->tracking_id.'. Please confirm my order status.') }}">☏ {{ __('messages.whatsapp_order') }}</a>
    </div>
</section>
@endsection
