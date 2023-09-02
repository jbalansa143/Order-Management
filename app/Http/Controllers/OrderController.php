<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;


class OrderController extends Controller
{
    /**
     * 
     * @return \Illuminate\view\view
     */
    public function index()
    {
        
        return view('components.orders.index');
    }
    /**
     * Store a newly created order in the database.
     *
     * @param  \App\Models\Cart  $cart
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception If random_int() encounters an error generating a random number.
     */
    public function store(Cart $cart, Request $request)
    {
        $cartItems = Cart::all();
 
        $orderNumber = null;
        $min = 10000;
        $max = 99999; 

        // Loop until a unique order number is generated
        do {
            try {
                $orderNumber = random_int($min, $max);
            } catch (\Exception $e) {
                // Handle the exception if random_int() encounters an error
                throw $e;
            }
        } while (Order::where('order_number', $orderNumber)->exists());

        foreach($cartItems as $cartItem) {
            $order = new Order;
            $order->menu = $cartItem->menu;
            $order->menu_id = $cartItem->menu_id;
            $order->order_number = $orderNumber;
            $order->category = $cartItem->category;
            $order->quantity = $cartItem->quantity;
            $order->price = $cartItem->price * $cartItem->quantity;;
            $order->image = $cartItem->image;
            $order->is_completed = $cartItem->is_completed;
            $order->save();
        }
        //clear the cart database after saving to database
        $cart->truncate();

        Session::forget('cart');
        return redirect()->route('order.complete')->with('orderNumber', $orderNumber);
    }

    /**
     * Display the complete view
     * 
     * @return \Illuminate\View\View
     */
    public function complete()
    {
        return view('components.menu.complete');
    }
    
  /**
   * Display the kitchen view with the list of orders
   * 
   * @return \Illuminate\View\View
   */
    public function viewOrders() {

        $orders = Order::all();

        return view('components.menu.kitchen', compact('orders'));
    }

}
