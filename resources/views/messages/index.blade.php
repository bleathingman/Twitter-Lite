@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media">
                            @if (Auth::user()->profile_picture)
                            <img src="{{ Auth::user()->profile_picture }}" class="profile-picture mr-3">
                            @else
                            <img src="/img/profile.jpg" class="profile-picture mr-3">
                            @endif
                            <div class="media-body message">
                                <a class="js-user-profile-link js-nav" href="{{ route('profile') }}">
                                    <h5 class="mt-0"><b>{{ Auth::user()->name }}</b></h5>
                                </a>
                                <h5 class="mt-0"><b>ID :</b> {{ Auth::user()->id }}</h5>
                                <h5 class="mt-0"><b>Inscit le :</b> {{ Auth::user()->created_at }}</h5>
                            </div>
                        </div>
                    </div>
                    <h5 class="mt-0"><b>Bio :</b> {{ Auth::user()->bio }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>Liste des messages</h3>
                    <br />
                    <a href="{{ route('home') }}" class="btn btn-info">← Retour</a>
                    <br />
                    <br />
                    <form method="POST" action="/messages">
                        @csrf
                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" size="80"
                            minlength="1" maxlength="300" required
                            placeholder="Qu'es-tu en train de faire en ce moment?"></textarea>
                        <br />
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                    <br />
                    @include('messages.list')
                </div>
            </div>
        </div>
    </div>
    @endsection