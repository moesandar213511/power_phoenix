<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function show_blog(){
        return view('site_admin.blog')->with(['url'=>'blog']);
    }
}
