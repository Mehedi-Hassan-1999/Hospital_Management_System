<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Notifications\SendMailNatification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Notification;

class AdminDoctorController extends Controller
{
    public $doctor;

    // ------- Doctor-------- //
    public function doctor_form(){
        if (Auth::id()){
            if (Auth::user()->user_type==1){
                return view('admin.doctor.doctor_form');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function add_doctor(Request $request){

        Doctor::newAddDoctor($request);
        return back()->with('message','Successfully Created ');
    }

    public function manage_doctor(){
        return view('admin.doctor.manage_doctor',[
            'doctors'=>Doctor::all()
        ]);
    }

    public function edit_doctor($id){
        return view('admin.doctor.edit_doctor',[
            'doctors'=>Doctor::find($id)
        ]);
    }

    public function update_doctor(Request $request){
        Doctor::newUpdateDoctor($request);
        return redirect(route('manage_doctor'))->with('message','Successfully Updated');
    }

    public function delete_doctor(Request $request){
        Doctor::newDeleteDoctor($request);
        return redirect(route('manage_doctor'))->with('message','Successfully Deleted');
    }




    // ------- Appointment-------- //
    public function manage_appointment(){
        if (Auth::id()){
            if (Auth::user()->user_type==1){
                return view('admin.appointment.manage_appointment',[
                    'appointments'=>Appointment::all()
                ]);
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function approved($id){
        $appoint = Appointment::find($id);
        $appoint->status='Approved';
        $appoint->save();
        return redirect()->back();
    }

    public function canceled($id){
        $appoint = Appointment::find($id);
        $appoint->status='Canceled';
        $appoint->save();
        return redirect()->back();
    }

    public function sendMail_form($id){
        return view('admin.email.sendMail_form',[
            'appointments' =>Appointment::find($id)
        ]);
    }

    public function add_sendMail(Request $request,$id){
        $appointment = Appointment::find($id);

        $details = [
          'greeting'    => $request->greeting,
          'body'        => $request->body,
          'action_text' => $request->action_text,
          'url'         => $request->url,
          'end_part'    => $request->end_part
        ];

        Notification::send($appointment,new SendMailNatification($details));

        return redirect()->back()->with('message','Email send has been Successfully');

    }
}
