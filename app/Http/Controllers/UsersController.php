<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Traveluser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class UsersController extends Controller
{
    //
    public function usersHomepage(){
        return view('usershomepage');
    }

    public function userRegistration(){
        return view('usersinclude.usersregistration');
    }

    public function userSubmitted(Request $request){
       
        // if($request->isMethod('get')){

        //     return view('usersinclude.usersregistration');
        // }

        $validate = $request ->validate([
            'name'=>'required|string|regex:/(^([a-zA-z]+)(\d+)?$)/u|min:3',
            'email' => 'required|email|max:255|regex:/(.*)@gmail\.com/i',
            'password'=>'required|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
            "phone" =>"required|regex:/(01)[0-9]{9}/",
            "address"=>"required|min:5|max:60"

        ],
        [
        // 'name.required' => 'Name is must be 3 characters long, Can contain number',
        // 'email.required' => "Email Must be valid",
        // 'password.required' => 'Must be 8 characters long.One lowercase letter, one upper case and must contain one digit',
        // "phn.required" => "plz enter your Phone number",
           
        // "address.required"=> "Enter Your Current Address"
        "name.required"=>"please put your name",
        "email.required" =>"The Email must be a valid email address",
        "password.required" => "Must be 8 characters long.One lowercase letter, one upper case and must contain one digit",
        "phone.required" => "Please enter your phn number",
       
        "address.required"=> "Please Enter Your Current Address"
            
        ] 
        );

        $traveluser = new traveluser();
        $traveluser->name = $request->name;
        $traveluser->email = $request->email;
        $traveluser->password = Hash::make($request->password);
        $traveluser->address = $request->address;
        
        $traveluser->phone = $request ->phone;
       
        
        $traveluser -> save();
       
        

        return redirect()->route("userlogin");



        // return view('usersinclude.usersregistration');

    }
    public function userLogin(Request $request){

        return view('usersinclude.userslogin');


    }

    // public function loginSubmit(Request $req){
        
    //     $traveluser = traveluser::where('email', $req->email)->where('password', $req->password)->first();

    //     if($traveluser){
    //         session()->put('', $traveluser->email);
    //         if($req->remember){
    //             setcookie('remember', $req->phone,time()+3600);
    //             // Cookie::queue('name', $traveluser->email, "abc", time()+60);
    //         }
    //         else{
    //             // setcookie('remember', "");
    //             Cookie::queue('name', "");
    //         }
    //         return redirect()->route('userpanel');
    //     }
    //     return redirect()->route('userlogin');

    // }

    public function userPanel(){

        return view('usersinclude.userspanel');

    }
    public function userProfilePage(){
    

        return view('usersinclude.checkprofile');

    }



    public function userProfileEdit(Request $request){

        $traveluser = Traveluser::where('id', $request->id)->first();

        return view('usersinclude.usersprofile')->with('traveluser', $traveluser);

    }

    public function profileEditSubmitted(Request $request){

        $traveluser = Traveluser::where('id', $request->id)->first();

        // $traveluser ->id = $request ->id;
        $traveluser ->name = $request ->name;
        
        $traveluser ->password = $request ->password;
        $traveluser ->email = $request ->email;
        $traveluser ->phone = $request ->phone;
        $traveluser ->address = $request ->address;
        $traveluser->save();

        return redirect()->route("myprofileinfo");



    }

       
    public function userList(){
        // return view('pages.user.list'); 

        $traveluser = Traveluser::all();     

        return view('usersinclude.userslist')->with('travelusers', $traveluser);   

    }


    public function userProfileDelete(Request $request){
        
            $student = Traveluser::where("id",$request->id)->first();
            $student -> delete();
            return redirect()->route("logout");

      
        }






    public function userLogout(Request $request){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            -> route('usershomepage');

    }
}
