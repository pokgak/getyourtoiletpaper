<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $items = factory(App\Item::class, 10)->create();

        $users = factory(App\User::class, 4)->create()->each(function ($user) use (&$items) {
            $cartItems = factory(App\CartItem::class, rand(1, 10))->create([
                'user_id' => $user->id,
                'item_id' => Arr::random($items->toArray())['id'],
                'quantity' => rand(0, 10),
            ]);
        });
    }
}
