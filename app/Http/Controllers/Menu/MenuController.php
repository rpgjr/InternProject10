<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuController extends Controller {

    public function getMenuHome() {
        $menu = MenuItem::all();
        return view('Menu.menu-homepage', compact('menu'));
    }
}
