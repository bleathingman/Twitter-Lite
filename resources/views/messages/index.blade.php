@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
                    @foreach ($messages as $message)
                    <ul class="list-group">
                        <div class="shadow-none p-3 mb-5 bg-light rounded">
                            <div class="media">
                                <a class="js-user-profile-link js-nav" href="{{ route('users.show', $message->user) }}">
                                    @if ($message->user->profile_picture)
                                    <img src="{{ $message->user->profile_picture }}" class="profile-picture mr-3">
                                    @else
                                    <img src="/img/profile.jpg" class="profile-picture mr-3">
                                    @endif
                                </a>
                                <div class="media-body message">
                                    <a class="js-user-profile-link js-nav" href="{{ route('users.show', $message->user) }}">
                                        <h5 class="mt-0"></b>{{ $message->user->name }}</b></h5>
                                    </a>
                                    <div class="message-content">{{ $message->content }}</div>
                                </div>
                            </div>
                        </div>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection