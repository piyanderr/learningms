<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learning;
use App\Models\User;
use Illuminate\Support\Facades\Hash;    


class LearningController extends Controller
{

    public function Loginpageindex () {

        $login = Learning::all();
        return view ('login.loginpage', compact ('login')); //filename, var

    }
    
    public function LoginPageindex1 () {

        $log = Learning::all();
        return view ('auth.loginpage1', compact ('log')); //filename, var Not workuing

    }
    
    public function RegisterIndex () {

        $reg = Learning::all();
        return view ('auth.register', compact ('reg')); //filename, var Not workuing

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

        //Query Builder
        //This code is the same as the codes above, use whatever you prefer to use
        // $query = DB::table('users')
        //         ->insert([
        //             'firstname' => $request->firstname,
        //             'lastname' => $request->lastname,
        //             'email' => $request->email,
        //             'password' => Hash::make($request->password),
        //             'password_confirmation' => Hash::make($request->password_confirmation),
        //         ]);

        if($query){

            return back()->with('Success','You are successfully registered!');
        }
        else {

            return back()->with('Failed', 'There is problem in your registration.');
        }
    }

    public function CheckIt (Request $request) {

        // return $request->Input();

        $request->validate([

            'email' => 'required|email',
            'password' => 'required|min:5|max:12'

        ]);

            //If the users filled form is validated, then process the log in

        $user = User::where('email','=', $request->email)->first();

            //Another way to write code
            //Query Builder Way:
            
        // $user = DB::table('users')
        //     ->where('email', $request->email)
        //     ->first();

        if($user){
            
            if(Hash::check($request->password, $user->password)) {

                //if the password matches the user will redirect or prceed to the users profile

                $request->session()->put('LoggedUser', $user->id);
                return redirect ('profile');
            
            }else{

                return back()->with('fail','The email password is incorrect');
            }

        }else{
            
            return back()->with('fail', 'The email address is not recognize');
        }
    }

    public function UsersProfile () {

        if(session()->has('LoggedUser')){

            $user = User::where('id', "=", session('LoggedUser'))->first();
            
            //Query Builder Way

            // $user = DB::table('users')
            //         ->where('id', session('LoggedUser'))
            //         ->first();

            $userdata = [
                
                'LoggedUserInfo' => $user
            ];
        }
        return view ('admin.usersprofile', $userdata); //filename

    }

    public function LogOutPageIndex() {

        if(session()->has('LoggedUser')) {
            session()->pull('LoggedUser');
            return redirect ('login');
        }

    }

     public function PassIndex () {

        $pass = Learning::all();
        return view ('password', compact ('pass'));

    }
 
    public function StudentHomepageindex () {

        $home2 = Learning::all();
        return view ('users.studentdash', compact ('dashboardC')); //filename, var

    }

    public function AdminHomepageindex () {

        $home = Learning::all();
        return view ('admin.admindash', compact ('dashboardA')); //filename, var

    }

    public function TeacherHomepageindex () {
    
        $home2 = Learning::all();
        return view ('users.teacherdash', compact ('dashboardB'));

    }

    // public function TableIndex () {

    //     $tab = Learning::all();
    //     return view ('table', compact ('tab'));

    // }

    // public function ChartsIndex () {

    //     $char = Learning::all();
    //     return view ('charts', compact ('char'));

    // }


}
