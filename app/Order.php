<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'price_id', 'count', 'link', 'is_completed'
    ];
    
    public function price()
    {
        return $this->hasOne('App\Price', 'id', 'price_id');
    }
    
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
