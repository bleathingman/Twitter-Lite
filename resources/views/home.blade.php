@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu principal</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Content de te revoir {{ Auth::user()->name }}, que veut tu faire ?
                    <br/>
                    <br/>
                    <br/>
                    <a href="http://localhost:8000/messages" class="btn btn-info">Lire les messages</a>
                    <br/>
                    <br/>
                    <a href="http://localhost:8000/messages/create" class="btn btn-info">Poster un nouveau message</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
