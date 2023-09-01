<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Menu;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return array
     */
    public function index()
    {
        $cart = session()->get('cart', []);
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
        foreach ($menu->getCategory() as $category) {
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
    
        // Add cart item to session
        $cartItem = [
            'menu_id' => $cart->menu_id,
            'menu' => $cart->menu,
            'category' => $cart->category,
            'image' => $cart->image,
            'quantity' => $cart->quantity,
            'price' => $cart->price,
        ];
    
        $cartSession = Session::get('cart', []);
        $cartSession[] = $cartItem;
        Session::put('cart', $cartSession);
    
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
     * Remove the specified resource from storage.
     * 
     * @param array
     */

    // public function destroy(Cart $cart)
    // {
    //     dd(session('cart'));
    //     $cart->delete();
    //     return redirect()->route('cart.index')->with('danger', 'Item has been deleted!');
    // }

    public function destroy($menuId)
    {
        $cartSession = Session::get('cart', []);
        
      
        $indexToDelete = -1;
        foreach ($cartSession as $index => $cartItem) {
            if ($cartItem['menu_id'] == $menuId) {
                $indexToDelete = $index;
                break;
            }
        }
    
        // If the menu item was found, remove it from the cart session
        if ($indexToDelete !== -1) {
            unset($cartSession[$indexToDelete]);
    
            // Reset array keys to ensure the session remains contiguous
            $cartSession = array_values($cartSession);
    
            // Update the cart session
            Session::put('cart', $cartSession);
        }
    
        return redirect()->route('cart.index');
    }
}