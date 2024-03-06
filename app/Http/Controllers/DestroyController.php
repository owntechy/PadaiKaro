<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function deletecourse($id)
    {
        $coursedata = Courses::find($id);
        $coursedata->delete();
        return redirect()->route('viewallcourses')->with('success', "Deleted.!!!!");
    }
}
