@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>Modifier le profil</h3>
                    <br />
                    <a href="{{ route('profile') }}" class="btn btn-info">← Retour</a>
                    <br />
                    <br />
                    <div class="shadow-none p-3 mb-5 bg-light rounded">
                        <form method="POST" action="/profile">
                            @csrf
                            <h5 class="mt-0">Pseudo</h5>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
                            </div>

                            <h5 class="mt-0">Bio</h5>
                            <div class="form-group mb-3">
                                <textarea class="form-control" name="bio" cols="80" minlength="0" maxlength="500"
                                    rows="3">{{ Auth::user()->bio }}</textarea>
                            </div>

                            <h5 class="mt-0">Adresse e-mail</h5>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}">
                            </div>

                            <h5 class="mt-0">Date de naissance</h5>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" name="birthdate"
                                    value="{{ Auth::user()->birthdate }}">
                            </div>

                            <h5 class="mt-0">Ville</h5>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="city" value="{{ Auth::user()->city }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Sauvgarder</button>
                        </form>
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