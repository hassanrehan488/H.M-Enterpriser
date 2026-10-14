@extends('layouts.app')
@section('content')
<section class="section narrow">
    <h1>{{ __('messages.checkout') }}</h1>
    <form class="checkout" method="post" action="{{ route('orders.store') }}">
        @csrf
        <label>{{ __('messages.customer_name') }}<input name="customer_name" required value="{{ old('customer_name') }}"></label>
        <label>{{ __('messages.phone') }}<input name="phone" required value="{{ old('phone') }}"></label>
        <label>{{ __('messages.whatsapp') }}<input name="whatsapp" value="{{ old('whatsapp') }}"></label>
        <label>{{ __('messages.city') }}<input name="city" required value="{{ old('city') }}"></label>
        <label>{{ __('messages.address') }}<textarea name="address" required>{{ old('address') }}</textarea></label>
        <label>{{ __('messages.notes') }}<textarea name="notes">{{ old('notes') }}</textarea></label>
        <div class="summary"><strong>{{ __('messages.total') }}: OMR {{ number_format($total,2) }}</strong></div>
        <button class="btn" type="submit">{{ __('messages.order_now') }}</button>
        <p class="muted">After placing the order, your unique tracking ID will be shown.</p>
    </form>
</section>
@endsection
