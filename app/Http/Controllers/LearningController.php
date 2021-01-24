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
    
    public function Homepageindex () {

        $home1 = Learning::all();
        return view ('homepage', compact ('home1')); //filename, var

    }

    public function Homepage2index () {

        $home = Learning::all();
        return view ('homepage3', compact ('home')); //filename, var

    }

    public function RegisterIndex () {

        $reg = Learning::all();
        return view ('register', compact ('reg')); //filename, var Not workuing

    }

    public function LoginPageindex1 () {

        $loglog = Learning::all();
        return view ('loginpage1', compact ('loglog')); //filename, var Not workuing

    }

    public function TableIndex () {

        $tab = Learning::all();
        return view ('table', compact ('tab'));

    }

    public function ChartsIndex () {

        $char = Learning::all();
        return view ('charts', compact ('char'));

    }

    public function PassIndex () {

        $pass = Learning::all();
        return view ('password', compact ('pass'));

    }

    public function LayoutIndex () {
    
        $out = Learning::all();
        return view ('layout-static', compact ('out'));

    }
}
