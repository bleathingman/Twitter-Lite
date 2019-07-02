<?php

namespace TwitterLite\Http\Controllers;

use TwitterLite\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::orderBy('created_at', 'desc')->paginate(15);

        return view('messages.index', ['messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:300',
        ]);

        $message = Auth::user()->messages()->create([
            "content" => $request->input('content')
        ]);

        return redirect()->route('messages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \TwitterLite\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \TwitterLite\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        if ($message->user != Auth::user()) {
            throw new AuthorizationException();
        }

        return view('messages.edit', ['message' => $message]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \TwitterLite\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        if ($message->user != Auth::user()) {
            throw new AuthorizationException();
        }

        $request->validate([
            'content' => 'required|max:300',
        ]);

        $message->content = $request->input('content');

        $message->save();
    
        return redirect()->route('messages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \TwitterLite\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        if ($message->user != Auth::user()) {
            throw new AuthorizationException();
        }

        $message->delete();

        return redirect()->route('messages.index');
    }
}
