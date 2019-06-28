<?php

namespace TwitterLite\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;


class AvatarController extends Controller
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
     * Store an uploaded avatar and update the user.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function upload(Request $request)
    {
        $avatar = $request->file('avatar');
        $path = $avatar->store('avatars', 'public');
        
        $user = Auth::user();
        $user->profile_picture = Storage::url($path);
        $user->save();

        return redirect()->route('profile');
    }
}
