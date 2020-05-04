<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lotto extends Model
{
    protected $table = 'lottos';
    protected $primaryKey = 'id';
    protected $fillable = ['note', 'seller_id', 'price', 'price_lot', 'number', 'quantity', 'stock', 'lot', 'status', 'announ_date'];
}
