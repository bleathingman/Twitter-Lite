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
                    @include('messages.list')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection