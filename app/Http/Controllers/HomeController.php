<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    //  User or Not-user //
    public function index(){
        if (Auth::id()){
            return redirect('home');
        }
        else{
            return view('user.home.home',[
                'doctors'=> Doctor::all()
            ]);
        }
    }

    public function appointment(Request $request){
        Appointment::newAddAppointment($request);
        return redirect()->back()->with('message','Appointment request Successfully. We will contact with you as soon as possible');
    }

    public function show_myAppointment(){
        if (Auth::id()){
            if (Auth::user()->user_type==0){
                $userId = Auth::user()->id;
                $myAppoint = Appointment::where('user_id',$userId)->get();
                return view('user.myAppointment.myAppointment',compact('myAppoint'));
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }

    public function cancel_appointment($id){
        $appoint = Appointment::find($id);
        $appoint->delete();
        return redirect()->back();
    }





    //  User or Admin //
    public function redirect(){
        if (Auth::id()){
            if (Auth::user()->user_type=='0'){
                return view('user.home.home',[
                    'doctors'=> Doctor::all()
                ]);
            }
            else{
                return view('admin.home.home');
            }
        }
        else{
            return redirect()->back();
        }
    }
}
