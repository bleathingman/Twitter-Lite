@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h3>À propos</h3>
                    <br />
                    <a href="{{ route('home') }}" class="btn btn-info">← Retour</a>
                    <br />
                    <br />
                    <div class="shadow-none p-3 mb-5 bg-light rounded">
                        <h5>Ce site est le projet de stage de Silinox et Bleathingman, réaliser du 3 juin jusqu'au 5
                            juillet
                            2019.</h5>
                        <h5>Site web : <a href="http://twitter-lite.localtunnel.me">http://twitter-lite.localtunnel.me</a></h5>
                        <br />
                        <h5>- Réaliser avec le framework <a href="https://laravel.com/">Laravel 5.8</a></h5>
                        <h5>- Coder avec <a href="https://code.visualstudio.com/">Visual Studio Code</a></h5>
                        <h5>- Style graphique réaliser avec <a href="https://getbootstrap.com/">Bootstrap 4.3</a></h5>
                        <h5>- Base de données : <a href="https://www.mysql.com/fr/">MySQL</a></h5>
                        <h5>- Serveur de developement : <a href="https://laragon.org/">Laragon</a></h5>
                        <h5>- Serveur de déploiment : <a href="https://localtunnel.github.io/www/">Localtunnel</a></h5>
                        <br>
                        <h5>Un grand merci à notre maître de stage sans qui tout cela aurait été impossible !<h5>
                        <br/>
                        <a href="https://github.com/Silinox0/Twitter-Lite" class="btn btn-primary">Git Hub</a>
                        <br/>
                        <br/>
                        <h5>Serveur discord des développeur (Venez c'est gratuit) :</h5>
                        <a href="https://discord.gg/DkZMXgS" class="btn btn-primary">Silinox</a> &nbsp; <a href="https://discord.gg/eRuY36F" class="btn btn-primary">Bleathingman</a>
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