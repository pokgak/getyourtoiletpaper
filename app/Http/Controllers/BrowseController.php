<?php

namespace App\Http\Controllers;

use App\Item;

class BrowseController extends Controller
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
     * Show the products page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('browse', [
            'items' => Item::all(),
        ]);
    }
}
