<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToursController extends Controller
{
    //
    public function getAll()
    {
    	
    }

    public function getAdd()
    {
    	return view('admin.tours.add');
    }
}
