<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class Orders extends Component
{
    public $groupedOrders; 
    public $text;

    public function mount()
    {
        
        $orders = Order::all();
        $this->groupedOrders = collect($orders)
        ->sortByDesc('created_at')
        ->groupBy('order_number');
    

    }
    
    public function render()
    {
        return view('livewire.orders');
    }
}
