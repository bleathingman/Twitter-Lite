@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <h3>Erreur 404 - Page non trouvée</h3>
                <br/>
    <div class="media">
                    <pre>    /\_____/\
   /  o   o  \
  ( ==  ^  == )
   )         (
  (           )
 ( (  )   (  ) )
(__(__)___(__)__)</pre>
                <div class="media-body">
                    <h4 class="mt-0">Bouboule s'est perdu !</h4>
                    <h5>Ramene-le à la maison s'il te plait !</h5>
                </div>
                </div>
            <br/>
                <a class="btn btn-primary" href="{{ route('home') }}" role="button">Ramener Bouboule à la maison</a>
            </div>
        </div>
    </div>
   </div>
@endsection
