@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Messages</div>

                <div class="card-body">
                <form method="POST" action="/messages">
                    @csrf
                    <input class="@error('content') is-invalid @enderror" 
                        name="content" 
                        size="80"
                        minlength="1" maxlength="300" 
                        required 
                        placeholder="What are you doing right now?"
                    ></textarea>
                    <button type="submit">Envoyer</button>
                </form>
                @foreach ($messages as $message)
                    <p>
                    {{ $message->user->name }} : {{ $message->content }}
                    </p>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
