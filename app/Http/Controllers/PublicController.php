<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {


        return view('welcome');
    }


    public function about()
    {
        return view('about');
    }


    public function pricing()
    {
        return view('pricing');
    }


    public function contact()
    {
        return view('contact');
    }



}
