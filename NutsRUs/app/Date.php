<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $table = 'date';

    protected $fillable = array('order_date');

    public function order()
    {
        return $this->belongsTo('Order');
    }
}
