<?php

namespace TwitterLite\Http\Controllers\API;

use TwitterLite\Http\Controllers\Controller;
use TwitterLite\Http\Resources\UserResource;
use TwitterLite\User;
use TwitterLite\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserResource::collection(User::all());
    }

    /**
     * Display the user profile page.
     */
    public function profile(){
        return view('profile', array('user' => Auth::user()) );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->input());
        return new UserResource($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  \TwitterLite\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TwitterLite\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->input());
        return new UserResource($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TwitterLite\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
    }
}
