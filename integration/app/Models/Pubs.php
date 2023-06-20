<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $createdat
 * @property int    $etat
 * @property string $image
 * @property string $description
 * @property Date   $begin
 * @property Date   $end
 */
class Pubs extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pubs';

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
        'image', 'description', 'begin', 'createdat', 'end', 'etat'
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
        'id' => 'int', 'image' => 'string', 'description' => 'string', 'begin' => 'date', 'createdat' => 'timestamp', 'end' => 'date', 'etat' => 'int'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'begin', 'createdat', 'end'
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
