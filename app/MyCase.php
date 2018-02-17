<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyCase extends Model
{
    protected $table = 'cases';
    
    protected $fillable = [
        'name', 'price', 'min_count', 'max_count', 'price_id'
    ];
    
    public function pricetbl()
    {
        return $this->hasOne('App\Price', 'id', 'price_id');
    }
}

