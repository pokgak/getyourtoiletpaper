<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\CartItem;
use App\Item;

class CartItemController extends Controller
{
    /**
     * List items in cart
     */
    public function listItems()
    {
        return CartItem::where('user_id', Auth::id())->get();
    }

    /**
     * Adds new item to the cart.
     */
    public function addItem(Request $request)
    {
        $user_id = $request->input('user_id');
        $item_id = $request->input('item_id');
        $quantity = intval($request->input('quantity'));

        $ci = CartItem::where('user_id', $user_id)
                ->where('item_id', $item_id)
                ->first();
        if (empty($ci)) {
            $new = CartItem::create([
                'user_id' => $user_id,
                'item_id' => $item_id,
                'quantity' => $quantity,
            ]);
            return $new;
        } else {
            $ci->quantity = $ci->quantity + $quantity;
            $ci->save();
            return $ci;
        }
    }

    /**
     * Change quantity of item in cart.
     */
    public function changeQuantity(Request $request)
    {
        return $request->all();
    }

    /**
     * Remove item from cart.
     */
    public function removeItem()
    {
        return "REMOVE ITEM";
    }
}
