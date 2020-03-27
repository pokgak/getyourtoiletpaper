<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
    public function listItems() {
        return Item::all();
    }

    public function getItem($id) {
        return Item::findOrFail($id);
    }

    public function createNewItem(Request $request) {
        $item = new Item;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->save();

        return $item;
    }

    public function deleteItem($id) {
        Item::findOrFail($id)->delete();
    }

    public function updateItem(Request $request) {
        $item = Item::findOrFail($request->id);
        if ($request->name) {
            $item->name = $request->name;
        }
        if ($request->description) {
            $item->description = $request->description;
        }
        $item->save();

        return $item;
    }
}
