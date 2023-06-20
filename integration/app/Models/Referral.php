<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $user
 * @property int    $successful_referrals
 * @property string $code
 */
class Referral extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'referral';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'user';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'successful_referrals'
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
        'user' => 'int', 'code' => 'string', 'successful_referrals' => 'int'
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
