<?php

namespace App\Http\Livewire\Menu;

use App\Models\MenuItem;
use Livewire\Component;

class EditMenu extends Component
{
    public $item_id;
    public $item_name;
    public $item_price;
    public $item_stock;

    public function render() {
        return view('livewire.menu.edit-menu');
    }

    public $rules = [
        'item_id'       => 'required',
        'item_name'     => 'required',
        'item_price'    => 'required',
        'item_stock'    => 'required',
    ];

    public function editItem() {
        $this->validate();

        $update_item = MenuItem::where('item_id', $this->item_id)->update([
            'item_name'     => $this->item_name,
            'item_price'    => $this->item_price,
            'item_stock'    => $this->item_stock,
        ]);

        if($update_item) {
            return redirect(route('menu.getMenuHome'))
                    ->with('success', 'Item Successfully Updated!');
        }
        else {
            return redirect(route('menu.getMenuHome'))
                    ->with('fail', 'Error Occured!');
        }

    }
}
