<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
Use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
    

    
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard')
        ->with('posts_count', Post::all()->count())
        ->with('trashed_count', Post::onlyTrashed()->get()->count())
        ->with('categories_count', Category::all()->count())
        ->with('users_count',User::all()->count());
    }
}
