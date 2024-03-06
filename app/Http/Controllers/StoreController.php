<?php

namespace App\Http\Controllers;

use App\Models\BuyVehicle;
use App\Models\Customer;
use App\Models\Vehicle;
use App\Models\CompanyRegistration;
use App\Models\Courses;
use App\Models\Colleges;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function createcompanyregistration(Request $req)
    {
        try {
            $imagePath = null;

            if ($req->hasFile('logo')) {
                $image = $req->file('logo');
                $imagePath = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imagePath);
            }

            CompanyRegistration::create([
                'customername' => $req->customername,
                'mobileno' => $req->mobileno,
                'whatsappnumber' => $req->whatsappnumber,
                'gmail' => $req->gmail,
                'supportemail' => $req->supportemail,
                'headoffice' => $req->headoffice,
                'logo' => $imagePath,
                'facebooklink' => $req->facebooklink,
                'instagramlink' => $req->instagramlink,
                'youtubelink' => $req->youtubelink,
                'twitterlink' => $req->twitterlink,
                'linkedinlink' => $req->linkedinlink,
                'customeraddress' => $req->customeraddress,
            ]);

            return redirect()->route('viewcustomerregistrationpage')->with('success', 'You are Registered Successfully..!!!!!');
        } catch (\Exception $e) {
            return redirect()->route('viewcustomerregistrationpage')->with('error', $e->getMessage());
        }
    }

    public function createcourseregistration(Request $req)
    {
        // dd($req->courselogo);

        try {

            $imagePath = null;

            if ($req->hasFile('courselogo')) {
                $image = $req->file('courselogo');
                $imagePath = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imagePath);
            }
            Courses::create([
                'coursename' => $req->coursename,
                'duration' => $req->duration,
                'courseactualname' => $req->courseactualname,
                'fees' => $req->fees,
                'courselogo' => $imagePath,
                'coursediscription' => $req->coursediscription,
            ]);
            return redirect()->route('viewaddcoursepage')->with('success', 'Course Added..!!!!!!');
        } catch (\Exception $e) {
            // return redirect()->route('viewallcustomers')->with('error', $bv->getMessage());

            return redirect()->route('viewaddcoursepage')->with('error', 'Course Not Added. again');
        }
    }

    public function createaddcollege(Request $req)
    {
        try {
            $coverimage = null;
            $logo = null;

            if ($req->hasFile('coverimage')) {
                $image = $req->file('coverimage');
                $imagePathcover = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imagePathcover);
            }
            if ($req->hasFile('logo')) {
                $image = $req->file('logo');
                $imagePathlogo = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('uploads'), $imagePathlogo);
            }

            Colleges::create([
                'collegename' => $req->collegename,
                'universityname' => $req->universityname,
                'coverimage' => $imagePathcover,
                'logo' => $imagePathlogo,
                'city' => $req->city,
                'state' => $req->state,
                'country' => $req->country,
                'pincode' => $req->pincode,
                'discription' => $req->discription,
            ]);

            return redirect()->route('viewaddcollege')->with('success', 'College Added..!!!!');
        } catch (\Exception $e) {
            // return redirect()->route('viewaddcollege')->with('error', $e->getMessage());
            return redirect()->route('viewaddcollege')->with('error', 'Not Added.... Try Again...');
        }
    }
}
