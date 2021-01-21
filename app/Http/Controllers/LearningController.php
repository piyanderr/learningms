<?php

namespace App\Http\Controllers;

use App\Models\Learning;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function Loginpageindex () {

        $login = Learning::all();
        return view ('loginpage', compact ('login')); //filename, var

    }

    // public function LoginPageIndexA3 () {

    //     $login1 = Learning::all();
    //     return view ('vendor\adminlte\auth\login', compact ('login1')); //filename, var

    // }

    
    public function Homepageindex () {

        $home1 = Learning::all();
        return view ('homepage', compact ('home1')); //filename, var

    }

    public function Homepage2index () {

        $home = Learning::all();
        return view ('homepage2', compact ('home')); //filename, var

    }

    public function Homepage3index () {

        $home2 = Learning::all();
        return view ('vendor\adminlte\auth\register', compact ('home2')); //filename, var Not workuing

    }
}
