@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>Profil</h3>
                    <br />
                    <a href="{{ route('home') }}" class="btn btn-info">← Retour</a>
                    <br />
                    <br />
                    <div class="shadow-none p-3 mb-5 bg-light rounded">
                        <div class="media">
                            @if ($user->profile_picture)
                            <img src="{{ $user->profile_picture }}" class="big-profile-picture mr-3">
                            @else
                            <img src="/img/profile.jpg" class="big-profile-picture mr-3">
                            @endif
                            <div class="media-body">
                                @if ($user->id == Auth::user()->id)
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Changer la photo de profil
                                    </button>
                                    <div class="dropdown-menu">
                                        <form method="POST" action="/avatar" enctype="multipart/form-data">
                                            @csrf
                                            <br />
                                            <input type="file" class="custom-file-input" id="avatar" name="avatar"
                                                required>
                                            <label class="custom-file-label" for="avatar">Choisis un fichier</label>
                                            <!-- <input type="file" name="avatar"> -->
                                            <button type="submit" class="btn btn-primary">Envoyer</button>
                                            @push("scripts")
                                            <script type="text/javascript">
                                                document.addEventListener('DOMContentLoaded', () => {
                                                    $('.custom-file-input').change(function (e) {
                                                        $(this).next('.custom-file-label').html(e.target.files[0].name);
                                                    });
                                                });
                                            </script>
                                            @endpush
                                        </form>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <br />
                        <br />
                        <h5 class="mt-0"><b>Pseudo :</b> {{ $user->name }} &nbsp; <b>ID :</b> {{ $user->id }}</h5>
                        <br />
                        <h5 class="mt-0"><b>Bio :</b> {{ $user->bio }}</h5>
                        <br />
                        <h5 class="mt-0"><b>E-mail :</b> {{ $user->email }}</h5>
                        <br />
                        <h5 class="mt-0"><b>Date de naissance :</b> {{ $user->birthdate }}</h5>
                        <br />
                        <h5 class="mt-0"><b>Ville :</b> {{ $user->city }}</h5>
                        <br />
                        <h5 class="mt-0"><b>Inscrit le :</b> {{ $user->created_at }}</h5>
                        <br />
                        <div class="btn-group" role="group">
                            <a href="{{ route('users.messages', $user) }}" class="btn btn-info">Listes des messages</a>
                            @if ($user->id == Auth::user()->id)
                            <a href="{{ route('profile.edit') }}" class="btn btn-info">Éditer</a>
                            @endif
                        </div>
                    </div>
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