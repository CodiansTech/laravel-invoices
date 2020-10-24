<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    protected $fillable = ['item_name', 'client_name', 'print_postion', 'print_size', 'size', 'phone_number', 'country', 'address', 'price', 'shipping_price', 'status'];
}
