@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>Éditer le message</h3>
                    <br />
                    <a href="{{ route('messages.index') }}" class="btn btn-info">← Retour</a>
                    <br />
                    <br />
                    <form method="POST" action="{{ route('messages.update', $message) }}">
                        @method('PUT')
                        @csrf
                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" cols="80"
                            rows="10" minlength="1" maxlength="300" required>{{ $message->content }}</textarea>
                        <br />

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <br />
                        @endif

                        <button type="submit" class="btn btn-primary">Sauvegarder</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection