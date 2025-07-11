<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = ['ticker', 'full_name', 'buy_price', 'quantity'];
}
