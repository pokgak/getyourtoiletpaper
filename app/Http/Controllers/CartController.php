<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class CartController extends Controller
{
    /**
     * Get cart for specified user.
     */
    public function getCart()
    {
        return "GET CART";
    }

    /**
     * List items in cart
     */
    public function listItems()
    {
        return "LIST CART ITEMS";
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
