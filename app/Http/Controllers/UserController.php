<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function name() {
    	var_dump("hello name");die();
    }

    public function young() {
    	var_dump("I`m young");die();
    }
}
