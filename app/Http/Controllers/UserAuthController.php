<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learning;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserAuthController extends Controller
{

    public function Loginpageindex () {

        $login = Learning::all();
        return view ('login.loginpage', compact ('login')); //filename, var

    }
    
    public function LoginPageindex1 () {

        $log = Learning::all();
        return view ('login.loginpage1', compact ('log')); //filename, var Not workuing

    }

    public function CheckIt (Request $request) {

        // return $request->Input();

        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:5|max:12'

        ]);

        //If the users filled form is validated, then process the log in

        $user = User::where('email','=', $request->email)->first();
        if($user){
            if(Hash::check($request->password, $user->password)) {

                //if the password matches the user will redirect or prceed to the users profile
                $request->session()->put('LoggedUser', $user->id);
                return redirect ('profile');
            
            }else {
                return back()->with('fail','Your password is incorrect!');
            }
        }else{
            return back()->with('fail', 'Account NOT found!');
        }
    }

    
    public function RegisterIndex () {

        $reg = Learning::all();
        return view ('login.register', compact ('reg')); //filename, var Not workuing

    }

    public function UserCreate (Request $request) {

        // return $request->Input();
        $request->validate ([

            'firstname' => 'required|min:3|max:30',
            'lastname' => 'required|min:3|max:30',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:12|confirmed',
            'password_confirmation' => 'required',

        ]);

        //if the your registration form is validated successfully then you can finally register a new user.

        $user = new User;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->password_confirmation = Hash::make($request->password_confirmation);

        $query = $user->save();

        if($query){

            return back()->with('Success','You are successfully registered!');
        }
        else {

            return back()->with('Failed', 'There is problem in your registration. Registration went wrong.');
        }
    }

    public function UsersProfile () {

        if(session()->has('LoggedUser')){
            $user = User::where('id', "=", session('LoggedUser'))->first();
            $userdata = [
                'LoggedUserInfo' => $user
            ];
        }
        return view ('admin.usersprofile', $userdata); //filename

    }

    public function LogOutPageIndex() {

        if(session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect ('register');
        }

    }

     public function PassIndex () {

        $pass = Learning::all();
        return view ('password', compact ('pass'));

    }

}
