<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'O_id', 'U_id', 'A_id', 'D_id', 'shipping_status', 'total'
    ];

    // Set Relationships
    public function address()
    {
        return $this->hasOne('Address');
    }

    public function user()
    {
        return $this->hasOne('User');
    }

    public function date()
    {
        return $this->hasOne('Date');
    }

    public function item()
    {
        return $this->belongsToMany('Item', 'batch', 'I_id', 'O_id');
    }
}
