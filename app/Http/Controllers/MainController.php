<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
   function navigation($name='index'){
    return view($name);
   }
}
