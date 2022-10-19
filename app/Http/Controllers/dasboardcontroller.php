<?php

namespace App\Http\Controllers;

use App\location;
use App\staff;
use Carbon\Carbon;
use Illuminate\Http\Request;

class dasboardcontroller extends Controller
{
    // ida nee Mak Dados husi Controller



    public function index(){

        // $location = staff::whereLocationId(1)->count();
        // $osan = staff::where('location_id',1)->sum('salario');
        // $balidestaff = staff::whereLocationId(2)->count();
        // $balide = staff::where('location_id',2)->sum('salario');
        $data = staff::get();




        return view('layouts.dasboard',compact('data'));
    }
}