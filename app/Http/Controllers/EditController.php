<?php

namespace App\Http\Controllers;

use App\Models\BuyVehicle;
use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\Customer;

class EditController extends Controller
{
    public function editcourse()
    {
        $course = Courses::all();
        // dd($course);
        return view('AdminPanel.editcourse', compact('course'));
    }

    public function updatecourse(Request $request)
    {
        // dd($request->courseid);
        try {
            $imagePathinvoice = null;
            if ($request->hasFile('courselogo')) {
                $image = $request->file('courselogo');
                $imagePathinvoice = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imagePathinvoice);
            }
            Courses::where('id', $request->courseid)->update([
                'coursename' => $request->coursename,
                'duration' => $request->duration,
                'courseactualname' => $request->courseactualname,
                'fees' => $request->fees,
                'courselogo' => $imagePathinvoice,
                'coursediscription' => $request->coursediscription,
            ]);
            return redirect()->route('viewallcourses')->with('success', "Updated..!!!");
        } catch (\Exception $e) {
            // return redirect()->route('viewallcourses')->with('error', $e->getMessage());
            return redirect()->route('viewallcourses')->with('error', 'Not Updated..Try Again.....');
        }
    }
}
