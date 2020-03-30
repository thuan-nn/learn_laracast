<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'Order';
    protected $fillable = [
        'created_at' , 'updated_at'
    ];
}
