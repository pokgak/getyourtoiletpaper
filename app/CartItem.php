<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    /**
     * Allow saving when using create or mass update.
     */
    protected $fillable = ['user_id', 'item_id', 'quantity'];

    /**
     * Get the user that owns the item.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
