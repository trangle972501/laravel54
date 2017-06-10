<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarBrandsController extends Controller
{
    //

    public function getAll()
    {
    	return view('admin.carbrands.add');
    }
}
