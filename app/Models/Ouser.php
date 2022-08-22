<?php

namespace App\Models;

use App\Models\User;
use App\Models\Ouser;
use App\Models\Odriver;
use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ouser extends Model
{



    
    use HasFactory;
    protected $fillable = ['id','date' ,'user_id','Location_id','price','usercount','goorwent','time','fullname','additionalnumber'];

public function users()
    {
        return $this->belongsTo(User::class , 'user_id' );

    }

      public function odrivers(){// i used withpivot() when table relation is many to many table exam_user is like that i do like this in user module exam function 
        return $this->belongsToMany(Odriver::class  ,'odriver_ouser', 'ouser_id' ,'odriver_id'  )
        ->withPivot('completed')->withTimestamps();
    }

    public function locations()
    {
        return $this->belongsTo(Location::class , 'Location_id' );
    }
}
