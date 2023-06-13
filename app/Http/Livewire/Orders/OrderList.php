<?php

namespace App\Http\Livewire\Orders;

use App\Models\MenuItem;
use App\Models\Orders;
use Livewire\Component;

class OrderList extends Component
{
    public function render() {
        $orders = Orders::all();
        $menu   = MenuItem::all();
        return view('livewire.orders.order-list', compact(['orders', 'menu']));
    }
}
