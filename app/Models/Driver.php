<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
use App\Models\Odriver;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Driver extends Authenticatable
{
    use HasFactory;
    protected $guard = 'driver';
    protected $fillable = [
        'id',
        'name', 
        'driver_id',  
        'starttime',  
        'endtime',  
        'phone',
        'password',
        'location_id',
        'carnumber',
        'explicance',
    ];

    public function location(){
        return $this->belongsTo(location::class);
    }
    public function odrivers()
    {
        return $this->hasMany(Odriver::class );
    }
}
