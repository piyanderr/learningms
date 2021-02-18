<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Learning;
use App\Models\User;
use Illuminate\Support\Facades\Hash;    


class LearningController extends Controller
{
 
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

    public function TableIndex () {

        $tab = Learning::all();
        return view ('table', compact ('tab'));

    }

    public function ChartsIndex () {

        $char = Learning::all();
        return view ('charts', compact ('char'));

    }


}
