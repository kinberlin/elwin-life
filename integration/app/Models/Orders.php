<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $order_id
 * @property int    $createdat
 * @property int    $user
 * @property string $address
 * @property string $city
 * @property string $country
 * @property string $email
 * @property string $nom
 * @property string $phone
 * @property string $status
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
        'address', 'city', 'country', 'createdat', 'email', 'nom', 'phone', 'status', 'user'
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
        'order_id' => 'int', 'address' => 'string', 'city' => 'string', 'country' => 'string', 'createdat' => 'timestamp', 'email' => 'string', 'nom' => 'string', 'phone' => 'string', 'status' => 'string', 'user' => 'int'
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
