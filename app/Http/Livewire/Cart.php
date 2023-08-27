<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartComponent extends Component
{
    public $cartItems = [];
    public $selectedProduct;
    public $quantity = 1;
    public $total = 0;

    public function render()
    {
        return view('livewire.cart-component');
    }
}
