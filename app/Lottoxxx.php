<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lotto extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lottos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['note', 'seller_id', 'price', 'price_lot', 'number', 'quantity', 'stock', 'lot', 'status', 'annouced_date'];

    
}
