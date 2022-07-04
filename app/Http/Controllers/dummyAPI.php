<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dummyAPI extends Controller
{
 function  getData(){
    return["name"=>"amil","email"=>"amil@gmail.com","phone_number"=>"98606750045","date_of_birth"=>"2056-2-12"];
 }
}
