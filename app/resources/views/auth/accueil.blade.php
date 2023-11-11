@extends('auth.accueil')
@section('content')
<div class="accueil__container">
    <div class="accueil__header">
        <h1 class="accueil__header-title">Bonjour {{Auth::user() ? Auth::user()->prenom :
            'Guest'}}</h1>
        <div class="accueil__header-button">
            <a href="/cellier">Ajouter un Cellier</a>
        </div>
    </div>
</div>
@endsection
