<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Menu;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return array
     */
    public function index()
    {
        $cart = Cart::all();
       return view('components.menu.cart', compact('cart'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param array
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
        $cart->image =  $menu->image;
        $cart->quantity = $request->qty;
        $cart->price = $menu->getPrice();

        $cart->save();
       
        
        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     * @return array
     */
    public function show(Menu $menu)
    {
        return view('components.menu.detail', compact('menu'));
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
     * 
     * @param array
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index')->with('danger', 'Item has been deleted!');
    }
}