<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = array('name', 'price');

    public function order()
    {
        return $this->belongsToMany('Order', 'batch', 'O_id', 'I_id');
    }
}
