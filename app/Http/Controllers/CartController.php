<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Menu;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Menu $menu, Request $request)
    {
        // Get Category name
        foreach($menu->getCategory() as $category) {
            $category = $category->category;
        }
     
        $cart = new Cart;
        $cart->menu_id = $menu->id;
        $cart->menu =  $menu->getName();
        $cart->category =  $category;
        $cart->quantity = 1;
        $cart->price = $menu->getPrice();

        $cart->save();
       
        
        return redirect()->route('customer.index');
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
