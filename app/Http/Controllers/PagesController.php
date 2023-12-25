<?php

namespace App\Http\Controllers;

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

}
