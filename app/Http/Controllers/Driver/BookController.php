<?php

namespace App\Http\Controllers\Driver;

use Alert ; 
use Carbon\Carbon;
use App\Models\Ouser;
use App\Models\Driver;
use App\Models\Odriver;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{  
public function index( ){
    return view("Driver.auth.book");
 
}
public function store(Request $request ){ //store function 
$driverid= Auth::user()->id; //to get ID for user Login 
$location = Auth::user()->location_id; //to get Location for driver Becouse it will auto insert Location when Create Order 
  Odriver::create([ // get data from from by $request->(parameter)
        'driver_id'=>$driverid,
        'Location_id'=>$location, //auto insert 
        'starttime'=>$request->starttime,
        'endtime'=>$request->endtime,  
    ]);
Alert::success(' تم الحجز بنجاح  ');
    return redirect('Driver/book/all');   
}
public function all(){ //show all driver orders 
$driverid = Auth::user()->id;
$l = Auth::user()->location_id;
$data['odriver'] = Odriver::join('drivers' , 'odrivers.driver_id' , '=' ,'drivers.id')->where('driver_id', '=' , $driverid)->get();
$data['location'] = Odriver::join('locations' , 'odrivers.Location_id' , '=' ,'locations.id')->where('Location_id', '=' , $l)->get();
// i used join to call another data tabel by id and i use where to filter data show just for this driver
return view('Driver.auth.bookall')->with($data);
}
public function active(){ //  this  show  all orders drivers and connect with user table 
$driverid = Auth::user()->id; 
$odriver = Odriver::select('id')->where('driver_id' , '=' , $driverid)->first(); 
$odriver = Odriver::select('id')->where('driver_id' , '=' , $driverid)->first();
$starttime = Odriver::select('starttime')->where('driver_id' , '=' , $driverid)->first();
$endtime = Odriver::select('endtime')->where('driver_id' , '=' , $driverid)->first();
//store data 
// SELECT * FROM `ousers` WHERE Location_id = 1 AND time BETWEEN '12:00:00' AND '16:00:00';
// $ouser = Ouser::where('Location_id' , '=' , Auth::user()->location_id)->whereBetween('time', [$starttime, $endtime])->get();
$ouser = Ouser::where('Location_id' , '=' , Auth::user()->location_id)->where('status','=' ,'show')->where('time', '>', $starttime ,'<',$endtime)->where('date' , '=',Carbon::today()->toDateString())->get();
dd($ouser);
// this query to connect orders user with orders drivers with condetions
if($ouser != NULL){
$ousers = Ouser::find($ouser); //show data if found it else 404 Screen 
// dd($ouser);
$final = $ouser->odrivers()->syncWithoutDetaching($ousers); // store order driver with order user without and doplication 
// dd($final);
$update = Ouser::where('id' , '=' , $ouser->id)->update(['status' => 'hide', ]);
}


/////////////////////////////////////////
//show data 
// $driverid=  Auth::user()->id;
// dd($driverid);

// $data['ouser'] = Ouser::whereHas('users', function($q) {
//     // $driverid=  Auth::user()->id;

//     $q->where('id', '=' , 1);
// })->get();


// // dd($data['ouser']);

// $data['test'] = Odriver::find(3);
// $dr = Driver::find($driverid);

$data['driver'] = Driver::findorFail($driverid);
// $data['d'] = $dr->odrivers();
// dd($data['d']);
// $data['re'] = $test->ousers;
// $t =$re->completed;
// dd($re);
// dd($data['user']);
// $data['drivers'] = Odriver::where("driver_id" , '=' , $driverid)->get();
// dd($data['driver']);

// $data['ouser']= $data['driver']->ouser();
return view('Driver.auth.bookactive')->with($data);
}
}
