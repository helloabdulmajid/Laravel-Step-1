<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class bookController extends Controller
{
    public function show($user){
        echo $user;
        echo " This is from controller";
    }
}
