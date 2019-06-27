<?php

namespace TwitterLite\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
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
     * Show the profile page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        return view('profile', ['user' => Auth::user()]);
    }
}

