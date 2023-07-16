<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $createdat
 * @property int    $customer_id
 * @property int    $order_id
 * @property float  $amount
 * @property string $card_type
 * @property string $currency
 * @property string $email
 * @property string $flw_ref
 * @property string $name
 * @property string $payment_type
 * @property string $phone_number
 * @property string $status
 * @property string $tx_ref
 */
class Payments extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'payments';

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
        'amount', 'card_type', 'createdat', 'currency', 'customer_id', 'email', 'flw_ref', 'name', 'order_id', 'payment_type', 'phone_number', 'status', 'tx_ref'
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
        'id' => 'int', 'amount' => 'double', 'card_type' => 'string', 'createdat' => 'timestamp', 'currency' => 'string', 'customer_id' => 'int', 'email' => 'string', 'flw_ref' => 'string', 'name' => 'string', 'order_id' => 'int', 'payment_type' => 'string', 'phone_number' => 'string', 'status' => 'string', 'tx_ref' => 'string'
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
