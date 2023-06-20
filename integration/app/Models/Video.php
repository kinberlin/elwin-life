<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $channel
 * @property int    $category
 * @property int    $createdat
 * @property int    $recomended
 * @property string $authors
 * @property string $bloc1
 * @property string $cover_image
 * @property string $duration
 * @property string $titre
 * @property string $video
 */
class Video extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'video';

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
        'authors', 'bloc1', 'channel','category', 'cover_image', 'createdat', 'duration', 'recomended', 'titre', 'video'
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
        'id' => 'int', 'authors' => 'string', 'bloc1' => 'string', 'channel' => 'int','category' => 'int', 'cover_image' => 'string', 'createdat' => 'timestamp', 'duration' => 'string', 'recomended' => 'int', 'titre' => 'string', 'video' => 'string'
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
