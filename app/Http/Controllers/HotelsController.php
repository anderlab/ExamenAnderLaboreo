<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
class HotelsController extends Controller
{
    function index(){
    
      
       $hotels = Hotel::where('categoria', 1)->get();
        return view ('hotel.index',['hotels' => $hotels]);


    }
}
