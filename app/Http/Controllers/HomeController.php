<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;    
use App\models\User;
use App\models\Doctor;
use App\models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype == '0')
            {
                $doctors = Doctor::all();

                return view('user.home',compact('doctors'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {

        if(Auth::id()){
            return redirect('home');
        }else{
        $doctors = Doctor::all();

        return view('user.home',compact('doctors'));
        }
    }

    public function appointment(Request $request)
    {
        $appointment = new Appointment;

        $appointment->name = $request->name;
        $appointment->email = $request->email;
        $appointment->date = $request->date;
        $appointment->phone = $request->phone;
        $appointment->doctor = $request->doctor;
        $appointment->message = $request->message;
        $appointment->status = 'In Progress';
        if(Auth::id()){
            $appointment->user_id = Auth::user()->id;
        }
        $appointment->save();

        return redirect()->back()->with('message','Request Successfully Sended. We will contact you soon as possible.');

    }

    public function myappointments()
    {
        $userid = Auth::user()->id;
        $appoint = Appointment::where('user_id',$userid)->get();

        return view('user.my_appointments', compact('appoint'));
    }

    public function cancel_appointment($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();

        return redirect()->back();
    }
}
