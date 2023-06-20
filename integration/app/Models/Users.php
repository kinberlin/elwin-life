<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
/**
 * @property int    $id
 * @property int    $createdat
 * @property int    $role
 * @property int    $status
 * @property int    $email_verified_at
 * @property int    $updated_at
 * @property string $firstname
 * @property string $referrer
 * @property string $phone
 * @property string $country
 * @property string $BP
 * @property string $lastname
 * @property string $email
 * @property string $city
 * @property string $company
 * @property string $adress
 * @property string $image
 * @property string $password
 * @property string $remember_token
 */
class Users extends Authenticatable
{
    use \Illuminate\Auth\Authenticatable, Notifiable;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user';

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
        'firstname','referrer', 'phone', 'country', 'BP', 'lastname', 'email', 'city', 'company', 'adress', 'createdat', 'image', 'password', 'role','status', 'email_verified_at', 'remember_token', 'updated_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'int', 'firstname' => 'string','referrer' => 'int', 'phone' => 'string', 'country' => 'string', 'BP' => 'string', 'lastname' => 'string', 'email' => 'string', 'city' => 'string', 'company' => 'string', 'adress' => 'string', 'createdat' => 'timestamp', 'image' => 'string', 'password' => 'string', 'role' => 'int', 'status' => 'int', 'email_verified_at' => 'timestamp', 'remember_token' => 'string', 'updated_at' => 'timestamp'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'createdat', 'email_verified_at', 'updated_at'
    ];
    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
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
