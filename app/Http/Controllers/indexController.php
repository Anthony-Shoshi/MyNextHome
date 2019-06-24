<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\BlogPost;
use offset;

class indexController extends Controller
{
    public function index()
    {   
        $blogPosts = BlogPost::orderBy('created_at','desc')->limit(3)->get();
    	if (Auth::user()->user_role == 'admin') {
    		return view('admin.home');
    	}
    		return view('user.home')->with('blogPosts',$blogPosts);        
    }

    public function adminDashboard()
    {
    	if (Auth::user()->user_role == 'admin') {
    		return view('admin.home');
    	}
    	return redirect('/');
    }

}
