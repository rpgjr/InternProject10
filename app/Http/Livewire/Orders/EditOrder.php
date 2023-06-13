<?php

namespace App\Http\Livewire\Orders;

use App\Models\MenuItem;
use App\Models\Orders;
use Livewire\Component;

class EditOrder extends Component
{
    public $order_id;
    public $item_id;
    public $order_type;
    public $payment_status;

    public function render() {
        $menu = MenuItem::all();
        return view('livewire.orders.edit-order', compact('menu'));
    }

    public $rules = [
        'item_id'           => 'required',
        'order_type'        => 'required',
        'payment_status'    => 'required',
    ];

    public function editOrder() {
        $this->validate();

        $update_order = Orders::where('order_id', $this->order_id)->update([
            'item_id'           => $this->item_id,
            'order_type'        => $this->order_type,
            'payment_status'    => $this->payment_status,
        ]);

        if($update_order) {
            return redirect(route('order.getOrderHome'))
                    ->with('success', 'Order Successfully Updated!');
        }
        else {
            return redirect(route('order.getOrderHome'))
                    ->with('fail', 'Error Occured!');
        }

    }
}
