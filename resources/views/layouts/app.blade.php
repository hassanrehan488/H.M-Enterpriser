<!doctype html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() === 'ar' || app()->getLocale() === 'ur' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>{{ $title ?? 'HM Enterprise' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header class="nav">
    <a href="{{ route('home') }}" class="brand">
        <span class="logo">HM</span>
        <span><strong>HM Enterprise.om</strong><small>Premium Bedsheets for a Better Tomorrow</small></span>
    </a>
    <nav>
        <a href="{{ route('home') }}">{{ __('messages.home') }}</a>
        <a href="{{ route('products.index') }}">{{ __('messages.shop') }}</a>
        <a href="#about">{{ __('messages.about') }}</a>
        <a href="#contact">{{ __('messages.contact') }}</a>
    </nav>
    <div class="nav-actions">
        <form action="{{ route('products.index') }}" method="get" class="search">
            <input name="q" placeholder="Search">
        </form>
        <a href="{{ route('cart.index') }}" class="cart-link">🛒 <span>{{ collect(session('cart', []))->sum('qty') }}</span></a>
        <div class="langs">
            <a href="{{ route('language.set','en') }}">EN</a>
            <a href="{{ route('language.set','ar') }}">ع</a>
            <a href="{{ route('language.set','ur') }}">اردو</a>
        </div>
    </div>
</header>

@if(session('success')) <div class="flash success">{{ session('success') }}</div> @endif
@if(session('error')) <div class="flash error">{{ session('error') }}</div> @endif

<main>@yield('content')</main>

<footer id="contact">
    <div><strong>HM Enterprise.om</strong><p>Premium bedsheets delivered across Oman.</p></div>
    <div><a href="https://wa.me/{{ env('WHATSAPP_NUMBER') }}">WhatsApp Order</a></div>
</footer>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
