<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $user
 * @property int    $ads
 * @property int    $vente
 * @property int    $createdat
 * @property string $activity
 * @property string $mail
 * @property string $description
 * @property string $phone
 */
class Partnership extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'partnership';

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
        'user', 'activity', 'mail', 'ads', 'vente', 'description', 'createdat', 'phone'
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
        'id' => 'int', 'user' => 'int', 'activity' => 'string', 'mail' => 'string', 'ads' => 'int', 'vente' => 'int', 'description' => 'string', 'createdat' => 'timestamp', 'phone' => 'string'
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
