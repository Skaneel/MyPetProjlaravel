<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Users extends Controller
{
    //
    function checkDb(){

        // $user=DB::select('select * from useralextable');
        // print_r($user);
        // // echo "we are here";
        
        // echo "query will be here";

        $users=DB::table('useralextable')->count();
        // ->where('name', '777')
        // ->get();
        print_r($users);
    }
}
