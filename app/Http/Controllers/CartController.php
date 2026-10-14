<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    private function cart(): array
    {
        return session('cart', []);
    }

    public function index()
    {
        $cart = $this->cart();
        $total = collect($cart)->sum(fn ($item) => $item['price'] * $item['qty']);
        return view('cart.index', compact('cart', 'total'));
    }

    public function add(Request $request, Product $product)
    {
        $qty = max(1, (int) $request->input('qty', 1));
        $cart = $this->cart();

        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty'] += $qty;
        } else {
            $cart[$product->id] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => (float) $product->price,
                'image' => $product->image,
                'qty' => $qty,
            ];
        }

        session(['cart' => $cart]);

        return back()->with('success', __('messages.added_to_cart'));
    }

    public function update(Request $request, Product $product)
    {
        $cart = $this->cart();
        $qty = max(1, (int) $request->input('qty', 1));

        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty'] = $qty;
        }

        session(['cart' => $cart]);
        return back();
    }

    public function remove(Product $product)
    {
        $cart = $this->cart();
        unset($cart[$product->id]);
        session(['cart' => $cart]);
        return back();
    }

    public function clear()
    {
        session()->forget('cart');
        return back();
    }
}
