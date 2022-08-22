<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
// use App\Models\Type;
use App\Models\Type;
use App\Models\City;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];


    // public function type()
    // {
    //     return $this->belongsTo(Type::class, 'type_id');
    // }
    // public function location()
    // {
    //     return $this->belongsTo(City::class, 'location_id');
    // }


    public function driver(){// i used withpivot() when table relation is many to many table exam_user is like that i do like this in user module exam function 
        return $this->belongsToMany(User::class)
        ->withPivot('goorwent','usercount','status')->withTimestamps();
    }



    // public function comments()
    // {
    //     return $this->hasMany(Comment::class ,'foreign_key');
    // }

}
