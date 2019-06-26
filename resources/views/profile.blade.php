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
                    <img src="/img/profile.jpg" class="profile-picture mr-3" alt="...">
                <br/>
                <br/>
                    <h5 class="mt-0"><b>Pseudo :</b> {{ Auth::user()->name }}</h5>
                    <br/>
                    <h5 class="mt-0"><b>E-mail :</b> {{ Auth::user()->email }}</h5>
                </div>
                <a type="link" href="http://localhost:8000/profile/edit" class="btn btn-primary">Editer [WIP]</a>
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
