<?php
namespace App\Http\Controllers\Driver;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Driver; //call model inside controller
use App\Models\Location;
use Alert; // import sweet alert 
use Hash; //import hash password library
class AuthController extends Controller
{
    public function index()
    {
        return view('Driver.auth.login'); //to show login user page
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        $data['location'] = Location::select('id','name')->get();//Select id, name from Location 
        return view('Driver.auth.register')->with($data);  //with() to send parameter in view page to display data
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {

            if (Auth::guard('driver')->attempt(['phone' => $request->phone, 'password' => $request->password])) {
                // this condetions is select driver user by middleware / attemp this function to check Auth data to data base  
                
            Alert::success(' تم التسجيل بنجاح  ');//if the condition is yes send this alert to redirect page 
            return redirect("Driver/book"); // redirect use to set this on URL to check in web 
        }
        Alert::error(' يرجى التاكد من رقم و كلمة المرور  '); //if not correct will show this alert with set URL as redirect

        return redirect("Driver/login");
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    
    public function store(Request $request){
                    Driver::create([         //to get all request form from view page and store 
                        //by create is Insert Into Driver where name = $request->name , phone -------
                      'name'=>$request->name,
                      'phone'=>$request->phone,
                      'carnumber'=>$request->carnumber,
                      'explicance'=>$request->explicance ,
                      'password' => Hash::make($request->password),
                    'location_id'=>$request->location_id,                
                     ]);     
                     Alert::success(' تم  اضافة السائف   ');
                    return view("Driver.auth.login");
        }
    /**
     * Write code on Method
     *
     * @return response()
     */

    
    /**
     * Write code on Method
     *
     * @return response()
     */

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();// to close  all session 
        Auth::logout(); //to close all session about Auth 
        Alert::success(' تسجيل الخروج بنجاج    ');
        return Redirect('/');
    }
}
