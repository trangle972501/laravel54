<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //
    public function getAll()
    {
    	return view('admin.orders.list');
    }
}
