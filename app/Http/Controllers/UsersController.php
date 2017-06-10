<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function getAll()
    {
    	return view('admin.users.list');
    }
}
