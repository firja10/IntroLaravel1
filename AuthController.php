<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{
    /*
      Show the profile for the given user.
     
      @param  int  $id
      @return View*/
     
    public function reg()
    {  
        return view('register');
    }


    public function datang()
    {  
        return view('welcome');
    }


}