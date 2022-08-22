<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\Ouser;
use App\Models\Driver;
use App\Models\Odriver;

class Location extends Model
{ 

    use HasFactory;

    public function drivers(){
        return $this->hasMany(Driver::class)->withTimestamps(); // has many for relation 1 to many 
    }

    public function ousers()
    {
        return $this->hasMany(Ouser::class);
    }

    public function odrivers()
    {
        return $this->hasmany(Odriver::class);
    }
}
