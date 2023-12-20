<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view("welcome");
    }
    public function create(){
        return view("singup");
    }
    public function camera(){
        return view("camera");
    }
    public function lens(){
        return view("lens");
    }
    public function cameraBag(){
        return view("camera-bag");
    }
    public function dslrCamera(){
        return view("dslr-camera");
    }
    public function cameraSoftware(){
        return view("camera-software");
    }
    public function cameraBattery(){
        return view("camera-battery");
    }
    public function flimCamera(){
        return view("flim-camera");
    }
}
