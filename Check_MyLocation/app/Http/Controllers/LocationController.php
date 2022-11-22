<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //We can make this function in RestaurantController but I put it here if we need to implement more clear.
    public function index(){

        return view('home');
    }

}
