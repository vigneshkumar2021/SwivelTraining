<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreelancingController extends Controller
{
    public function showmain()
    {
        return view('index');
    }
    public function livecatagories()
    {
        return view('livecatagories');
    }
    public function videocatagories()
    {
        return view('videocatagories');
    }


    public function bronze()
    {
        return view('bronze');
    }
    public function bronze_details()
    {
        return view('bronze_details');
    }
     public function silver()
    {
        return view('silver');
    }

    public function silver_details()
    {
        return view('silver_details');
    }
    public function gold()
    {
        return view('gold');
    }
    public function gold_details()
    {
        return view('gold_details');
    }
    public function diamond()
    {
        return view('diamond');
    }
    public function diamond_details()
    {
        return view('diamond_details');
    }
     public function form()
    {
        return view('form');
    }

}
