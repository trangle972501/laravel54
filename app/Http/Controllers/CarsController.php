<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarsController extends Controller
{
    //
    public function getAll()
    {
    	return view('admin.cars.add');
    }
}
