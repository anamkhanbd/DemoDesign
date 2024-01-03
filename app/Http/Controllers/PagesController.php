<?php

namespace App\Http\Controllers;
use App\Models\Infouser;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    /*________ Main Navbar Manu Links__________*/


    public function index(){
        return view("welcome");
    }
    public function create(){
        return view("singup");
    }
    public function camera(){
        return view("/static/pages/camera");
    }
    public function lens(){
        return view("/static/pages/lens");
    }
    public function cameraBag(){
        return view("/static/pages/camera-bags");
    }
    public function dslrCamera(){
        return view("/static/pages/dslr-camera");
    }
    public function cameraBattery(){
        return view("/static/pages/camera-battery");
    }
    public function cameraSoftware(){
        return view("/static/pages/camera-software");
    }
    public function flimCamera(){
        return view("/static/pages/flim-camera");
    }
    public function tripots(){
        return view("/static/pages/tripots");
    }
    public function cameraCharger(){
        return view("/static/pages/camera-charger");
    }
    public function microwPhone(){
        return view("/static/pages/microwphone");
    }
    public function cameraGear(){
        return view("/static/pages/cameragear");
    }




    /* Sub navabar Manu */
    


    /*test*/
    public function testForm(){
        return view("static.test.form");
    }
    public function form2(){
        return view("static.test.form-2");
    }
    public function addAdmin(Request $request){
        $this->validate($request,[
            "username"=> "required|max:30",
            "useremail"=> "required|max:60",
            "usernumber"=> "required|min:11|max:11",
            "useradd"=> "required|max:50",
        ],[
            "username"=> "Name Fild is Required Fill This",
            "username.max"=> "Maximum use 30 Latter",
            "useremail"=> "Email Address is Required",
            "useremail.max"=> "Maximum use 50 Carecter Email Address",
            "usernumber"=> "Mobile Number is Required",
            "usernumber.max"=> "Maximum number 11 digit",
            "usernumber.min"=> "Minimum Number is 11 Digit",
            "useradd"=> "Address",
            "useradd.max"=> "Maximum use 50 Charecter",
        ]) ;
        echo("<pre>");
        print_r($request->all());
    }


    /*form3:::::::::::::::code */
    public function formEntry(){
        return view("static.test.formEntry");
    }

    public function form3(Request $ref){
        $ref->validate([
            "username"=> "required|max:50",
            "useremail"=> "required|max:50|email",
            "usernumber"=> "required|min:11|max:11",
        ],[
            "username"=> "Name Feild is Required ",
            "username.max"=> "Maximum use 50 charecters or letter",
            "useremail"=> "Email Address is Required",
            "useremail.email"=> "It's Not a Email Address",
            "useremail.max"=> "Email Address is Maximum size 50 charecter",
            "usernumber"=> "Mobile Number fild is Required",
            "usernumber.numaric"=> "Only use Number 1-9",
            "usernumber.min"=> "Number fild is Required minimum 11 Digit",
            "usernumber.max"=> "Number use Maximum size 11 Digit",
        ]);

        

    }

    /*Form4:::::::::::::::::::code */
    public function form4(){
        return view("static.test.form4");
    }
    public function login(Request $formFour){
        $formFour->validate([
            "username"=> "required|max:30|",
            "useremail"=> "required|max:60",
            "password"=> "required|min:6|max:32",
            "cr-password"=>"required|same:password",
        ],[
            "username"=> "This Fild is Required .",
            "username.max"=> "maximum use 30 charecter .",
            "useremail"=> "This fild is Required .",
            "useremail.max"=> "Maximum use 60 charecter .",
            "password"=> "This fild is Required",
            "password.min"=> "Minimum Password 6 Charecter",
            "password.max"=>"Maximum Password is 32 Cherecter",
            "cr-password"=> "This fild is REquired",
        ]);
        echo("<pre>");
        print_r($formFour->all());
    }


    /* info user entry */
    public function infoadd(){
        return view("static.test.infouser");
    }
    public function store(Request $request){
        $this->validate($request,[
            "username"=> "required|max:30",
            "useremail"=> "required|max:50",
            "usernumber"=>"required",
        ],[
            "username"=> "This Fild is Required.",
            "username.max"=> "Maximum Charecter use 30 .",
            "useremail"=> "This Fild is Required .",
            "useremail.max"=> "Maximum Cherecter use 50 .",
            "usernumber"=>"This Fild is Required .",
        ]);
        $infousers = new infouser;
        $infousers->username = $request->username;
        $infousers->useremail = $request->useremail;
        $infousers->usernumber = $request->usernumber;
        $infousers->save() ;
        return back()->withSuccess('Data Submited') ;
        }


}
