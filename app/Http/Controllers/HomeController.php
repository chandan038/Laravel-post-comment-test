<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User_post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$post = User_post::latest()->paginate(5);;
		//dd($post);
        return view('home',compact('post'))->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
