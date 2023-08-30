<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkToken')->except('index');
//       $this->middleware(function (){
//           dd('middleware user');
//       })->only('index');
    }
    public function index()
    {
        dd('x');
    }


    public function show(Request $request, User $user)
    {
        //return $user;
        dd($user); //Digite no url:http://127.0.0.1:8000/user/1

    }
}
