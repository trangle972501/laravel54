<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookCarsController extends Controller
{
    //
    public function getAll()
    {
    	return view('admin.bookcars.list');
    } 
}
