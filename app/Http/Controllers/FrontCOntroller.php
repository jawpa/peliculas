<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontCOntroller extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function contacto()
    {
    	return view('contacto');	
    }

    public function reviews()
    {
    	return view('reviews');
    }

}
