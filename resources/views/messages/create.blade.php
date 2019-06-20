@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Message</div>

                <div class="card-body">
                <form method="POST" action="/messages">
                    @csrf
                    <textarea class="@error('content') is-invalid @enderror" 
                        name="content" 
                        cols="80" rows="10" 
                        minlength="1" maxlength="300" 
                        required 
                        placeholder="What are you doing right now?"
                    ></textarea>
                    <br/>
                    <button type="submit">Envoyer</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection
