<?php

namespace App\Http\Livewire\Orders;

use App\Models\MenuItem;
use App\Models\Orders;
use Livewire\Component;

class DeleteOrder extends Component
{
    public $order_id;
    public $item_id;

    public function render() {
        $item_name = MenuItem::where('item_id', $this->item_id)->value('item_name');
        return view('livewire.orders.delete-order', compact('item_name'));
    }

    public function deleteOrder() {
        $delete_order = Orders::find($this->order_id);
        $result = $delete_order->delete();

        if($result) {
            return redirect(route('order.getOrderHome'))
                    ->with('success', 'Order Successfully Deleted!');
        }
        else {
            return redirect(route('order.getOrderHome'))
                    ->with('fail', 'Error Occured!');
        }
    }
}
