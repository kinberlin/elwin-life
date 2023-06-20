<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $createdat
 * @property int    $etat
 * @property string $name
 * @property string $description
 * @property string $image
 * @property string $cover_image
 */
class Channel extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'channel';

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
        'name', 'createdat', 'description', 'image', 'cover_image', 'etat'
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
        'id' => 'int', 'name' => 'string', 'createdat' => 'timestamp', 'description' => 'string', 'image' => 'string', 'cover_image' => 'string', 'etat' => 'int'
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
