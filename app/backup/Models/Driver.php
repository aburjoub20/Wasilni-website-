<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    // public function users()
    // {
    //     return $this->hasMany(User::class );
    // }
    public function user(){// i used withpivot() when table relation is many to many table exam_user is like that i do like this in user module exam function 
        return $this->belongsToMany(Driver::class)
        ->withPivot('goorwent','usercount','status')->withTimestamps();
    }
    public function location(){
        return belongsTo(location::class,'location_id');
    }
}
