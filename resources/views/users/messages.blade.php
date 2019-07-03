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
                    @include('messages.list')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
