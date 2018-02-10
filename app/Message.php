<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'user_id', 'message',
    ];
    
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}


