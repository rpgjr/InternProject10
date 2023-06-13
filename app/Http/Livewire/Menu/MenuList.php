<?php

namespace App\Http\Livewire\Menu;

use App\Models\MenuItem;
use Livewire\Component;

class MenuList extends Component
{
    public function render() {
        $menu = MenuItem::all();
        return view('livewire.menu.menu-list', compact('menu'));
    }
}
