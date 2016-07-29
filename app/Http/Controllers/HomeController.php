<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	
    public function index()
    {
    	return view('home');
    }

    public function publish()
    {
    	return view('publish');
    }

}
