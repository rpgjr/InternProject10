<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\MenuItem;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function addItem(Request $request) {
        $request->validate([
            'item_name'     => 'required',
            'item_price'    => 'required',
            'item_stock'    => 'required',
        ]);

        $new_item = new MenuItem();
        $new_item->item_name    = $request->input('item_name');
        $new_item->item_price   = $request->input('item_price');
        $new_item->item_stock   = $request->input('item_stock');

        $result = $new_item->save();

        if($result) {
            return back()->with('success', 'Item Successfully added!');
        }
        else {
            return back()->with('fail', 'Error Occured!');
        }
    }

    public function editItem(Request $request) {
        $request->validate([
            'item_id'       => 'required',
            'item_name'     => 'required',
            'item_price'    => 'required',
            'item_stock'    => 'required',
        ]);

        $update_item = MenuItem::where('item_id', $request->input('item_id'))->update([
            'item_name'     => $request->input('item_name'),
            'item_price'    => $request->input('item_price'),
            'item_stock'    => $request->input('item_stock'),
        ]);

        if($update_item) {
            return back()->with('success', 'Item Successfully updated!');
        }
        else {
            return back()->with('fail', 'Error Occured!');
        }

    }

    public function deleteItem(Request $request) {
        $delete_item = MenuItem::find($request->input('item_id'));
        $result = $delete_item->delete();

        if($result) {
            return back()->with('success', 'Item Successfully deleted!');
        }
        else {
            return back()->with('fail', 'Error Occured!');
        }
    }
}
