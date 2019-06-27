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

    /**
     * Show the profile edit page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function edit()
    {
    
        return view('editprofile');
    }

    /**
     * Update the user profile.
     *
     * @return Response
     */
    public function update(Request $request)
    {
        // TODO validation
        // $request->validate([
        //     'content' => 'required|max:300',
        // ]);
        // validate
        // read more on validation at http://laravel.com/docs/validation
        // $rules = array(
        //     'name'       => 'required',
        //     'email'      => 'required|email',
        // );
        // $validator = Validator::make(Input::all(), $rules);

        // // process the login
        // if ($validator->fails()) {
        //     return Redirect::to('profile/' . $id . '/edit')
        //         ->withErrors($validator)
        //         ->withInput(Input::except('password'));
        // } else {
            // store
            $user = Auth::user();
            $user->name             = $request->input('name');
            $user->email            = $request->input('email');
            // TODO $user->password         = $request->input('password');
            $user->profile_picture  = $request->input('profile_picture');
            $user->city             = $request->input('city');
            $user->birthdate        = $request->input('birthdate');
            
            $user->save();

            return redirect()->route('profile');
        // }
    }
}