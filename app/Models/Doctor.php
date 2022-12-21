<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['doctor_name','phone','email','speciality,','week','time','address','image'];

    protected static $doctor,$image,$imageName,$directory,$imageUrl,$str;

    protected static function newAddDoctor($request){
        self::$doctor = new Doctor();

        self::$doctor->doctor_name      = $request->doctor_name;
        self::$doctor->phone            = $request->phone;
        self::$doctor->email            = $request->email;
        self::$doctor->speciality       = $request->speciality;
        self::$doctor->room             = $request->room;
        self::$doctor->week             = $request->week;
        self::$doctor->time             = $request->time;
        self::$doctor->address          = $request->address;
        self::$doctor->image            = self::getUrlImage($request);

        self::$doctor->save();
    }

    protected static function getUrlImage($request){
        self::$image      = $request->file('image');
        self::$imageName  = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory  = 'admin/upload_image/images/';
        self::$imageUrl   = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }


    protected static function newUpdateDoctor($request){
        self::$doctor = Doctor::find($request->doctor_id);

        self::$doctor->doctor_name      = $request->doctor_name;
        self::$doctor->phone            = $request->phone;
        self::$doctor->email            = $request->email;
        self::$doctor->speciality       = $request->speciality;
        self::$doctor->room             = $request->room;
        self::$doctor->week             = $request->week;
        self::$doctor->time             = $request->time;
        self::$doctor->address          = $request->address;
        if ($request->file('image')){
            if (self::$doctor->image !=null){
                unlink(self::$doctor->image);
            }
            self::$doctor->image = self::getUrlImage($request);
        }
        self::$doctor->save();
    }

    protected static function newDeleteDoctor($request){
        self::$doctor = Doctor::find($request->doctor_id);
        if (file_exists(self::$doctor->image)){
            unlink(self::$doctor->image);
        }
        self::$doctor->delete();
    }
}
