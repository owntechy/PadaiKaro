<?php

namespace App\Http\Controllers;

use App\Models\BuyVehicle;
use App\Models\Courses;
use App\Models\Master;
use App\Models\Vehicle;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function viewmaster()
    {
        $modelInstance = new User();
        $res = $modelInstance->checkID();
        $masterdata = Master::where('parent_id', '=', $res)->where('type', '=', 'Master')->get();
        return view('AdminPanel.addmaster', compact('masterdata'));
    }

    public function viewsubmaster()
    {
        $modelInstance = new User();
        $res = $modelInstance->checkID();
        $masterdata = Master::where('parent_id', '=', $res)->where('type', '=', 'Master')->get();
        return view('AdminPanel.submaster', compact('masterdata'));
    }

    public function viewaddvehicle()
    {
        $masterdata = Master::where('type', '=', 'Vehicle')->get();
        $masterdatacolor = Master::where('type', '=', 'color')->get();
        return view('addvehicle', compact('masterdata', 'masterdatacolor'));
    }
    public function viewcustomerregistrationpage()
    {
        return view('AdminPanel.companyregistration');
    }

    public function viewaddcoursepage()
    {
        $masterdata = Master::where('type', '=', 'Course')->get();
        return view('AdminPanel.courseregistration', compact('masterdata'));
    }

    public function viewaddcollege()
    {
        return view('AdminPanel.addcollege');
    }

    public function viewallcourses()
    {
        $coursedata = Courses::paginate(5);
        return view('AdminPanel.allcourses',compact('coursedata'));
    }
}
