<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Appointment extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = ['name','email','date','time','doctor','phone','message,','status','user_id'];

    protected static $appointment;

    protected static function newAddAppointment($request){
        self::$appointment = new Appointment();

        self::$appointment->name           = $request->name;
        self::$appointment->email          = $request->email;
        self::$appointment->date           = $request->date;
        self::$appointment->time           = $request->time;
        self::$appointment->doctor         = $request->doctor;
        self::$appointment->phone          = $request->phone;
        self::$appointment->message        = $request->message;
        self::$appointment->status         = 'In progress';
        if (Auth::id()){
            self::$appointment->user_id    = Auth::user()->id;
        }
        self::$appointment->save();
    }
}
