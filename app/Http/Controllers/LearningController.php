<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learning;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class LearningController extends Controller
{
 
    public function Homepageindex () {

        $home1 = Learning::all();
        return view ('homepage', compact ('home1')); //filename, var

    }

    public function Homepage2index () {

        $home = Learning::all();
        return view ('homepage3', compact ('home')); //filename, var

    }

    public function TableIndex () {

        $tab = Learning::all();
        return view ('table', compact ('tab'));

    }

    public function ChartsIndex () {

        $char = Learning::all();
        return view ('charts', compact ('char'));

    }

    public function LayoutIndex () {
    
        $out = Learning::all();
        return view ('layout-static', compact ('out'));

    }
}
