<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Contact;
use Hash;
use Alert;

class AuthController extends Controller
{
    public function index()
    {
        return view('User.auth.login');
    }  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        return view('User.auth.register');
    }
      public function contact(Request $request){
         Contact::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'msg'=>$request->msg,
         ]) ;
         Alert::success(' تمت الاضافة بنجاح');
         return view('User.auth.login');
      }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
       
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            Alert::success('مرحبا بك ');
            return redirect("/book");
        }
        Alert::error(' يرجى التاكد من اسم المستخدم و كلمة المرور ');
        return redirect("login");
    }
 
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request){
                    User::create([           
                      'address'=>$request->address,
                      'name'=>$request->name,
                      'phone'=>$request->phone,
                      'email'=>$request->email,
                      'password' => Hash::make($request->password),
                     ]);    
                     Alert::success(' تم التسجيل بنجاح  ');
                    return view("User.auth.login");
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
        Session::flush();
        Auth::logout();
        Alert::success(' تسجيل الخروج بنجاج    ');
          return Redirect('/');
    }
}
