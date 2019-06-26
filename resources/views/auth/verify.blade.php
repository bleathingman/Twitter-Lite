@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                <h3>Réinitialiser le mot de passe</h3>
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un nouveau lien de vérification a été envoyé à votre adresse e-mail.') }}
                        </div>
                    @endif

                    {{ __('Avant de continuer, veuillez vérifier votre courrier électronique pour un lien de vérification.') }}
                    {{ __('Si vous n'avez pas reçu l'email') }}, <a href="{{ route('verification.resend') }}">{{ __('cliquez ici pour demander un autre') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
