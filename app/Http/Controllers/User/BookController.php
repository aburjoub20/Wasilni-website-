<?php

namespace App\Http\Controllers\User;

use Alert;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Ouser;
use App\Models\Odriver;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    
public function index(Request $request ){
    $data['location'] = Location::select('id','name')->get();
    return view("User.auth.book")->with($data);
}

public function store(Request $request ){
$userid= Auth::user()->id;
$price = Location::select('id','price')->where('id' , '=' , $request->Location_id)->first();
// dd($price->price);
// dd($request->all());
  Ouser::create([
      'fullname'=>$request->fullname,
      'additionalnumber'=>$request->additionalnumber,
        'user_id'=>$userid,
        'Location_id'=>$request->Location_id,
        'usercount'=>$request->usercount,
        'goorwent'=>$request->goorwent,
        'price'=>($request->usercount) * ($price->price),
        'date' => Carbon::today()->toDateString(),
        'time'=>$request->time,
    ]);
    Alert::success(' تم الحجز بنجاح  ');

    return redirect("/book/all");

}
public function all(){    
$userid = Auth::user()->id;
$data['user'] = User::select('id', 'name','phone')->get();
$data['ouser'] = Ouser::find($userid);

$data['ouser'] = Ouser::join('users' , 'ousers.user_id' , '=' ,'users.id')->where('user_id', '=' , $userid)->get();
// $data['odriver']
// dd($data['ouser']);
$data['location'] = Ouser::join('locations' , 'ousers.Location_id' , '=' ,'locations.id')->get();
return view('User.auth.bookall')->with($data);
}
public function show(){ 
    $userid=  Auth::user()->id;
    $data['user'] = User::find($userid);
    return view('User.auth.bookactive')->with($data);
}
}
