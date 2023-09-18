<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class CashierController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $orders = Order::where(['status' => 0])->get();
        $groupedOrders = collect($orders)->groupBy('order_number')->sortBy('created_at');
        
        return view('components.cashier.index', compact('orders', 'groupedOrders')); 
    }

    /**
     * cancel the order 
     */
    public function cancel($orderId)
    {
        Order::where(['order_number' => $orderId])
             ->update(['status' => 3]);
        return redirect()->route('cashier.index')->with('warning', 'Order ' . $orderId . ' has been cancelled');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
