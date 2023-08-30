<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        dd('x');
    }

    public function show($id, Request $request)
    {

        dd($request->query('firstname'), $id); //Digite no url:http://127.0.0.1:8000/user/1?firstname=Issufi
       // dd('show', $id);
    }
}
