@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <h3>Content de te revoir {{ Auth::user()->name }}, que veux tu faire ?</h3>
                    <br />
                    <div class="container">
                        <div class="row">
                            <div class="col-md">
                                <div class="card">
                                    <img src="/img/readmessage.jpg" class="card-img-top">
                                    <div class="card-body">
                                        <h4 class="card-title">Lire les messages</h4>
                                        <a href="{{ route('messages.index') }}" class="btn btn-primary">→</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card">
                                    <img src="/img/createmessage.jpg" class="card-img-top">
                                    <div class="card-body">
                                        <h4 class="card-title">Poster un nouveau message</h4>
                                        <a href="{{ route('messages.create') }}" class="btn btn-primary">→</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md">
                                <div class="card">
                                    <img src="/img/viewprofile.jpg" class="card-img-top">
                                    <div class="card-body">
                                        <h4 class="card-title">Voir mon profil</h4>
                                        <a href="{{ route('profile') }}" class="btn btn-primary">→</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card">
                                    <img src="/img/userlist.jpg" class="card-img-top">
                                    <div class="card-body">
                                        <h4 class="card-title">Voir les Utilisateurs</h4>
                                        <a href="{{ route('users.index') }}" class="btn btn-primary">→</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection