<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     * 
     * @param array $cart
     * @param array $request
     * @return void
     */
    public function store(Cart $cart, Request $request)
    {
        $cartItems = Cart::all();
 
        $order_number = null;

        // Loop until a unique order number is generated
        do {
            $order_number = Str::random(5);
        } while (Order::where('order_number', $order_number)->exists());

        foreach($cartItems as $cartItem) {
            $order = new Order;
            $order->menu = $cartItem->menu;
            $order->menu_id = $cartItem->menu_id;
            $order->order_number = $order_number;
            $order->category = $cartItem->category;
            $order->quantity = $cartItem->quantity;
            $order->price = $cartItem->price * $cartItem->quantity;;
            $order->image = $cartItem->image;
            $order->is_completed = $cartItem->is_completed;
            $order->save();
        }
        //clear the cart database after saving to database
        $cart->truncate();
        return redirect()->route('order.complete')->with('orderNumber', $order_number);
    }

    /**
     * Display the complete view
     */
    public function complete()
    {
        return view('components.menu.complete');
    }

}
