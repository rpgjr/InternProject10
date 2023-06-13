<?php

namespace App\Http\Livewire\Menu;

use App\Models\MenuItem;
use Livewire\Component;

class DeleteMenu extends Component
{
    public $item_id;
    public $item_name;

    public function render() {
        return view('livewire.menu.delete-menu');
    }

    public function deleteItem() {
        $delete_item = MenuItem::find($this->item_id);
        $result = $delete_item->delete();

        if($result) {
            return redirect(route('menu.getMenuHome'))
                    ->with('success', 'Item Successfully Deleted!');
        }
        else {
            return redirect(route('menu.getMenuHome'))
                    ->with('fail', 'Error Occured!');
        }
    }
}
