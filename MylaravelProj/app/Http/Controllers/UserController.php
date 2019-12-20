<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function formSubmit(Request $req)
    {
        $req->validate([
            'email'=>"required | email",
            'user'=>"required | max: 5"

        ]);
        print_r($req->input());
    }
}
