<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function addUser(Request $req){
        $req->validate([
            "username"=> "required",
            "useremail"=> "required|email",
            "userage"=> "required|numeric",
            "city"=> "required",
        ]);

        return $req->all();
    }
}
