<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $wishlist_id
 * @property int $customer_id
 */
class Wishlist extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'wishlist';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'wishlist_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_id'
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
        'wishlist_id' => 'int', 'customer_id' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        
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
