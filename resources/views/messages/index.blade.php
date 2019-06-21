@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des messages</div>

                <div class="card-body">
                <a href="http://localhost:8000/home" class="btn btn-info">Retour</a>
                <br/>
                <br/>
                <form method="POST" action="/messages">
                    @csrf
                    <textarea class="form-control @error('content') is-invalid @enderror"
                        name="content"
                        size="80"
                        minlength="1" maxlength="300"
                        required
                        placeholder="Qu'es-tu en train de faire en ce moment?"
                    ></textarea>
                    <br/>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
                <br/>
                <ul class="list-group">
                @foreach ($messages as $message)
                    <br/>
                <ul class="list-group">
                <li class="list-group-item">
                    <div class="media">
                        <img src="/img/profile.jpg" class="profile-picture mr-3" alt="...">
                            <div class="media-body">
                                <h5 class="mt-0">{{ $message->user->name }}</h5>
                            {{ $message->content }}
                            </div>
                    </div>
                </li>
                </ul>
                @endforeach
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
