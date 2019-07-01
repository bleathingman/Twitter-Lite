@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>Liste des utilisateurs</h3>
                    <br />
                    <a href="{{ route('home') }}" class="btn btn-info">← Retour</a>
                    <br />
                    <br />
                    <ul class="list-group">
                        @foreach ($users as $user)
                        <div class="shadow-none p-3 mb-5 bg-light rounded">
                            <div class="media">
                                @if ($user->profile_picture)
                                <img src="{{ $user->profile_picture }}" class="profile-picture mr-3">
                                @else
                                <img src="/img/profile.jpg" class="profile-picture mr-3">
                                @endif
                                <div class="media-body message">
                                    <a class="js-user-profile-link js-nav" href="{{ route('users.show', $user) }}">
                                        <h5 class="mt-0"><b>{{ $user->name }}</b></h5>
                                    </a>
                                    <div class="message-content">ID : {{ $user->id }}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </ul>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection