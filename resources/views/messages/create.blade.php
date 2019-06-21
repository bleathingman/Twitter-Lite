@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Poster un message</div>

                <div class="card-body">
                <a href="http://localhost:8000/home" class="btn btn-info">Retour</a>
                <br/>
                <br/>
                <form method="POST" action="/messages">
                    @csrf
                    <textarea class="form-control @error('content') is-invalid @enderror" 
                        name="content" 
                        cols="80" rows="10"
                        minlength="1" maxlength="300" 
                        required 
                        placeholder="Qu'es-tu en train de faire en ce moment?"
                    ></textarea>
                    <br/>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
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
