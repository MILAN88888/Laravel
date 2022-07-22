<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function index($id=" ")
    {
       return view('user.index',array('userId'=>$id));   }
}
