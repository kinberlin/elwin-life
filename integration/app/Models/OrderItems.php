<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int   $id
 * @property int   $createdat
 * @property int   $order_id
 * @property int   $product_id
 * @property int   $quantity
 * @property float $price
 */
class OrderItems extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'order_items';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'createdat', 'order_id', 'price', 'product_id', 'quantity'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int', 'createdat' => 'timestamp', 'order_id' => 'int', 'price' => 'double', 'product_id' => 'int', 'quantity' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'createdat'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var boolean
     */
    public $timestamps = false;

    // Scopes...

    // Functions ...

    // Relations ...
}
