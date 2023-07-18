<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Date;
/**
 * @property int  $id
 * @property int  $bundle
 * @property int  $amount
 * @property int  $user
 * @property int  $payment
 * @property Date $start_date
 * @property Date $end_date
 */
class Subscription extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subscription';

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
        'bundle', 'amount', 'start_date', 'end_date', 'user', 'payment'
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
        'id' => 'int', 'bundle' => 'int', 'amount' => 'int', 'start_date' => 'date', 'end_date' => 'date', 'user' => 'int', 'payment' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start_date', 'end_date'
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
