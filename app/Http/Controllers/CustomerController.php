<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Cart;
class CustomerController extends Controller
{
    public $categories = [];

    public function index() {
        $cart_items = Cart::all();
        
        $menus = Menu::where('status', 1)->get();
        $categories = Category::all();

        if($menus->isEmpty()) {
           $data = [
                'menus' => $menus, 
                'isEmpty' => true,
                'categories' => $categories,
                'cart_items' => $cart_items
            ];
        }
        $data = [
            'menus' => $menus,
            'isEmpty' => false,
            'categories' => $categories,
            'cart_items' => $cart_items
        ];
        return view('components.menu.menu', $data);
    }

    public function selectedCategory(string $categoryId) {
        $cart_items = Cart::all();
        $menus = ($categoryId === 0) ? Menu::all() : Menu::where('category', $categoryId)->where('status', 1)->get();
        $categories = Category::all();
        
        if ($menus->isEmpty()) {
           $data = [
                'menus' => $menus, 
                'isEmpty' => true,
                'categories' => $categories,
                'cart_items' => $cart_items
            ];
        }
       $data = [
            'menus' => $menus,
             'isEmpty' => false,
             'categories' => $categories,
             'cart_items' => $cart_items
            ];
            return view('components.menu.menu', $data);
    }
}