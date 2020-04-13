<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\CartItem;
use App\Item;

class CartItemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the products page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cartItems = collect();
        $this->listItems()->each(function ($ci) use (&$cartItems) {
            $item_name = Item::find($ci->item_id)->name;
            $cartItems = $cartItems->concat([
                [
                    'name' => $item_name,
                    'quantity' => $ci->quantity,
                ]
            ]);
        });

        return view('cart', [
            'cartItems' => $cartItems,
        ]);
    }

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
