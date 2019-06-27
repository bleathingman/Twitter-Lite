@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <h3>Liste des messages</h3>
                <br/>
                <a href="http://localhost:8000/home" class="btn btn-info">← Retour</a>
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
                @foreach ($messages as $message)
                <ul class="list-group">
                    <div class="shadow-none p-3 mb-5 bg-light rounded">
                        <div class="media">
                            @if ($message->user->profile_picture)
                                <img src="{{ $message->user->profile_picture }}" class="profile-picture mr-3">
                            @else
                                <img src="/img/profile.jpg" class="profile-picture mr-3">
                            @endif
                            <div class="media-body message">
                                <h5 class="mt-0">{{ $message->user->name }}</h5>
                                <div class="message-content">{{ $message->content }}</div>
                            </div>
                        </div>
                    </div>
                </ul>
                @endforeach
                <div>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Précédent</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                        <h5>[WIP]<h5/>
                    </ul>
                    </nav>
                    </ul>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
