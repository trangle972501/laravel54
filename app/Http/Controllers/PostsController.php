<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function getAll()
    {
    	return view('admin.posts.list');
    }
    public function getAdd()
    {
        return view('admin.posts.add');
    }
    public function getEdit()
    {
        return view('admin.posts.edit');
    }
    public function getById($id)
    {

    }
    public function delete()
    {

    }
}
