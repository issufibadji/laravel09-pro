<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        dd('x');
    }

    public function show($id){
        dd('show', $id);
    }
}
