<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int    $product_id
 * @property int    $category_id
 * @property int    $createdat
 * @property int    $delivery_period
 * @property int    $etat
 * @property int    $channel
 * @property string $seller
 * @property string $name
 * @property string $description
 * @property string $image2
 * @property string $image3
 * @property string $image
 * @property string $image1
 * @property float  $price
 */
class Products extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'product_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'seller', 'name', 'price', 'category_id', 'description', 'createdat', 'delivery_period', 'image2', 'image3', 'image', 'image1', 'etat', 'channel'
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
        'product_id' => 'int', 'seller' => 'string', 'name' => 'string', 'price' => 'double', 'category_id' => 'int', 'description' => 'string', 'createdat' => 'timestamp', 'delivery_period' => 'int', 'image2' => 'string', 'image3' => 'string', 'image' => 'string', 'image1' => 'string', 'etat' => 'int', 'channel' => 'int'
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
