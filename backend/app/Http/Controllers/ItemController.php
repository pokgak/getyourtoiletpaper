<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function listItems() {
        return response()->json([
            ["id" => 1, "name" => "test", "description" => "hola"],
            ["id" => 2, "name" => "test2", "description" => "moinmoin"],
        ]);
    }

    public function getItem($id) {
        return response("Item not found", 404);
    }

    public function createNewItem(Request $request) {
        return response()->json([
            "id" => $request->id,
            "name" => $request->name,
            "description" => $request->description,
        ]);
    }

    public function deleteItem($id) {
        return response("Item not found", 404);
    }

    public function updateItem(Request $request) {
        return response()->json([
            "id" => $request->id,
            "name" => $request->name,
            "description" => $request->description,
        ]);
    }
}
