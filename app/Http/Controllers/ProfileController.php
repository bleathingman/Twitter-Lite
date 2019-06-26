<?php

namespace TwitterLite\Http\Controllers;

use Illuminate\Http\Request;

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
     * Show the pofile page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        return view('profile');
    }
}

