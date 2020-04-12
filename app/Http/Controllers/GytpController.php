<?php

namespace App\Http\Controllers;

use App\Item;

class GytpController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->items = Item::all()->toArray();
    }

    /**
     * Show the product vendor edit page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit()
    {
        return view('edit');
    }

    /**
     * Show the products page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function browse()
    {
        return view('browse');
    }
}
