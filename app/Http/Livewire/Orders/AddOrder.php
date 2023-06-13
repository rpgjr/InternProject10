<?php

namespace App\Http\Livewire\Orders;

use App\Models\MenuItem;
use App\Models\Orders;
use Livewire\Component;

class AddOrder extends Component
{
    public $item_id;
    public $order_type;
    public $payment_status;

    public function render() {
        $menu = MenuItem::all();
        return view('livewire.orders.add-order', compact('menu'));
    }

    public $rules = [
        'item_id'           => 'required',
        'order_type'        => 'required',
        'payment_status'    => 'required',
    ];

    public function addOrder() {
        $this->validate();

        $new_order                  = new Orders();
        $new_order->item_id         = $this->item_id;
        $new_order->order_type      = $this->order_type;
        $new_order->payment_status  = $this->payment_status;
        $result                    = $new_order->save();

        if($result) {
            return redirect(route('order.getOrderHome'))
                    ->with('success', 'Order Successfully Added!');
        }
        else {
            return redirect(route('order.getOrderHome'))
                    ->with('fail', 'Error Occured!');
        }
    }

}
