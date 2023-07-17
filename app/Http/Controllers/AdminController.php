<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Appointment;
use App\Models\Doctor;
use PDF;

class AdminController extends Controller
{
    public function add_doctor_view()
    {

        return view('admin.add_doctor');
    }

    public function upload_doctor(Request $request)
    {
        $doctor = new Doctor;

        $image = $request->file;
        $imagename = time(). '.' .$image->getClientoriginalExtension();
        $request->file->move('doctor_images',$imagename);

        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;

        $doctor->save();

        return redirect()->back()->with('message','Doctor added Successfully');

    }

    public function showappointments()
    {
        $data = Appointment::all();

        return view('admin.show_appointments', compact('data'));
    }

    public function approve($id)
    {
        $data = Appointment::find($id);

        $data->status = 'Approved';

        $data->save();

        return redirect()->back();
    }

    public function cancel($id)
    {
        $data = Appointment::find($id);

        $data->status = 'Cancelled';

        $data->save();

        return redirect()->back();
    }

    public function all_doctors()
    {
        $doctors = Doctor::all();

        return view('admin.all_doctors',compact('doctors'));
    }

    public function edit_doctor($id)
    {
        $doctor = Doctor::find($id);

        return view('admin.update_doctor',compact('doctor'));
    }

    public function update_doctor(Request $request,$id)
    {
        $doctor = Doctor::find($id);

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->room = $request->room;
        $doctor->speciality = $request->speciality;
        $doctor->image = $request->image;

        $image = $request->file;
        if($image)
        {    
            $imagename = time(). '.' .$image->getClientoriginalExtension();
            $request->file->move('doctor_images',$imagename);
        }
        $doctor->save();

        return redirect()->back()->with('message','Doctor updated Successfully');

        return view('admin.update_doctor',compact('doctor'));
    }


    public function delete_doctor($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();
        return redirect()->back();
    }

      // Generate PDF
      public function createPDF() {
        $doctors = Doctor::all();
        // share data to view
        // view()->share('hello');
        $pdf = PDF::loadView('hello',compact('doctors'));
        return $pdf->download('Doctors.pdf');
      }
}

