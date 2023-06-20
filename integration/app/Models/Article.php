<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $id
 * @property int    $channel
 * @property int    $category
 * @property int    $createdat
 * @property string $bloc1
 * @property string $bloc2
 * @property string $bloc3
 * @property string $cover_image
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property string $image4
 * @property string $image5
 * @property string $titre
 */
class Article extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'article';

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
        'bloc1', 'bloc2', 'bloc3', 'channel','category', 'cover_image', 'createdat', 'image1', 'image2', 'image3', 'image4', 'image5', 'titre'
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
        'id' => 'int', 'bloc1' => 'string', 'bloc2' => 'string', 'bloc3' => 'string', 'category' => 'int', 'cover_image' => 'string', 'createdat' => 'timestamp', 'image1' => 'string', 'image2' => 'string', 'image3' => 'string', 'image4' => 'string', 'image5' => 'string', 'titre' => 'string'
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
