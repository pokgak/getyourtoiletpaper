<?php

namespace App\Http\Controllers;

use App\Item;

class EditController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('edit', [
            'items' => Item::all()->toArray(),
            'baseApi' => env('BASE_API', 'http://127.0.0.1:8000/api')
        ]);
    }
}
