<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class Orders extends Component
{
    public $groupedOrders; 

    public function mount()
    {
        
        $orders = Order::all();
        $this->groupedOrders = collect($orders)->groupBy('order_number');

    }
    
    public function render()
    {
        return view('livewire.orders');
    }
}
