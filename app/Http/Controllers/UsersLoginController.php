<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traveluser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class UsersLoginController extends Controller
{
    //

    public function userLogin(Request $request){

        return view('usersinclude.userslogin');


    }

    public function loginSubmit(Request $request){
        
        $traveluser = Traveluser::where('email',  '=', $request->email)->first();

        $password = $request->password;

        // $traveluser = Traveluser::where('email', $request->email);

        if($traveluser){ 
            

            if(Hash::check($password, $traveluser->password)){

                
                // session()->put('name', $traveluser->email);
                $request->session()->put('user',$traveluser->email);
                setcookie('remember',$request->email, time()+36000);
                return redirect()->route('userpanel');
                
            }
            
            // if($req->remember){
            //     // setcookie('remember', $req->phone,time()+3600);
            //     Cookie::queue('name', $traveluser->email, "abc", time()+60);
            // }
            // else{
            //     // setcookie('remember', "");
            //     Cookie::queue('name', "");
            // }
        }
        return back();

    }

    public function  userLogout(){
        session()->forget('user');
        return redirect()->route('userlogin');
    }
}
