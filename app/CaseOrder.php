<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseOrder extends Model
{
    protected $table = 'case_orders';
    
    protected $fillable = [
        'user_id', 'case_id', 'count', 'link', 'is_completed'
    ];
    
    public function mycase()
    {
        return $this->hasOne('App\MyCase', 'id', 'case_id');
    }
    
    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
