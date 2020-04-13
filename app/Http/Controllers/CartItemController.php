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
        return $request->all();
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
