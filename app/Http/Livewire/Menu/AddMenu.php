<?php

namespace App\Http\Livewire\Menu;

use App\Models\MenuItem;
use Illuminate\Http\Request;
use Livewire\Component;

class AddMenu extends Component
{
    public $item_name;
    public $item_price;
    public $item_stock;

    public $rules = [
        'item_name'     => 'required',
        'item_price'    => 'required',
        'item_stock'    => 'required',
    ];

    public function render() {
        return view('livewire.menu.add-menu');
    }

    public function addItem() {
        $this->validate();

        $new_item               = new MenuItem();
        $new_item->item_name    = $this->item_name;
        $new_item->item_price   = $this->item_price;
        $new_item->item_stock   = $this->item_stock;
        $result                 = $new_item->save();

        if($result) {
            return redirect(route('menu.getMenuHome'))
                    ->with('success', 'Item Successfully Added!');
        }
        else {
            return redirect(route('menu.getMenuHome'))
                    ->with('fail', 'Error Occured!');
        }
    }
}
