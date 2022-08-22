<?php

namespace App\Models;

use App\Models\Ouser;
use App\Models\Driver;
use App\Models\Odriver;
use App\Models\Location;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Odriver extends Model
{
    use HasFactory;
    protected $fillable = ['id','driver_id','Location_id','starttime','endtime']; //this data will insert for this table

    public function driver()
    {
        return $this->belongsTo(Driver::class ,'driver_id' ); // this for relation one to many Driver_id is forigenkey 
    }
    public function ousers(){ // this for many to many relation  i will call forgenkey tabels with many to many table 
        return $this->belongsToMany(Ouser::class , 'odriver_ouser' ,'odriver_id' , 'ouser_id' )
        ->withPivot('completed')->withTimestamps(); // pivot is colum for many to many table 
    }
    public function location()
    {
        return $this->belongsTo(Location::class , 'Location_id');
    }
}
