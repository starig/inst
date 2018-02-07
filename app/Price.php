<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $fillable = [
        'name', 'price', 'min_count', 'max_count',
    ];
}
