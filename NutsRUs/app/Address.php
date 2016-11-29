<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'address';

    protected $fillable = array('U_id', 'house_number', 'street', 'city', 'state', 'zip');

    // Set Relationships
    public function user()
    {
        return $this->belongsTo('User');
    }

    public function order()
    {
        return $this->belongsToMany('Order');
    }
}
