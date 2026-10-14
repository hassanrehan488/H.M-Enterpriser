<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function checkout()
    {
        $cart = session('cart', []);
        abort_if(empty($cart), 302, '', ['Location' => route('cart.index')]);

        $total = collect($cart)->sum(fn ($item) => $item['price'] * $item['qty']);
        return view('checkout.index', compact('cart', 'total'));
    }

    public function store(Request $request)
    {
        $cart = session('cart', []);
        if (!$cart) {
            return redirect()->route('cart.index')->with('error', __('messages.cart_empty'));
        }

        $data = $request->validate([
            'customer_name' => ['required', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:30'],
            'whatsapp' => ['nullable', 'string', 'max:30'],
            'address' => ['required', 'string', 'max:500'],
            'city' => ['required', 'string', 'max:100'],
            'notes' => ['nullable', 'string', 'max:1000'],
        ]);

        $items = array_values($cart);
        $total = collect($items)->sum(fn ($item) => $item['price'] * $item['qty']);

        $trackingId = 'HM-' . now()->format('ymd') . '-' . strtoupper(Str::random(6));

        $order = Order::create([
            ...$data,
            'tracking_id' => $trackingId,
            'items' => $items,
            'total' => $total,
            'status' => 'pending',
        ]);

        session()->forget('cart');

        return redirect()->route('orders.track', $order->tracking_id);
    }

    public function track(string $trackingId)
    {
        $order = Order::where('tracking_id', $trackingId)->firstOrFail();
        return view('orders.track', compact('order'));
    }
}
