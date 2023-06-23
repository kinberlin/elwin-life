<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $order_id
 * @property int    $user
 * @property int    $createdat
 * @property string $status
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $city
 * @property string $country
 * @property string $address
 * @property string $payment
 * @property float  $amount
 * @property float  $discount
 * @property float  $delivery_fee
 */
class Orders extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'order_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user', 'status', 'createdat', 'name', 'email', 'phone', 'city', 'country', 'address', 'payment', 'amount', 'discount', 'delivery_fee'
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
        'order_id' => 'int', 'user' => 'int', 'status' => 'string', 'createdat' => 'timestamp', 'name' => 'string', 'email' => 'string', 'phone' => 'string', 'city' => 'string', 'country' => 'string', 'address' => 'string', 'payment' => 'string', 'amount' => 'double', 'discount' => 'double', 'delivery_fee' => 'double'
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
    public $timestamps = true;

    // Scopes...

    // Functions ...

    // Relations ...
}
