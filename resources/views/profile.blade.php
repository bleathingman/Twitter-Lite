@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <h3>Profil</h3>
                <br/>
                    <a href="http://localhost:8000/home" class="btn btn-info">← Retour</a>
                <br/>
                <br/>
                <div class="shadow-none p-3 mb-5 bg-light rounded">
                    @if ($user->profile_picture)
                        <img src="{{ $user->profile_picture }}" class="big-profile-picture mr-3">
                    @else
                        <img src="/img/profile.jpg" class="big-profile-picture mr-3">
                    @endif
                <br/>
                <br/>
                    <h5 class="mt-0"><b>Pseudo :</b> {{ $user->name }} &nbsp; <b>ID :</b> {{ $user->id }}</h5>
                    <br/>
                    <h5 class="mt-0"><b>E-mail :</b> {{ $user->email }}</h5>
                    <br/>
                    <h5 class="mt-0"><b>Date de naissance :</b> {{ $user->birthdate }}</h5>
                    <br/>
                    <h5 class="mt-0"><b>Ville :</b> {{ $user->city }}</h5>
                    <br/>
                    <h5 class="mt-0"><b>Inscrit le :</b> {{ $user->created_at }}</h5>
                    <br/>
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
