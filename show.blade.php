@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Détails de l'Annonce</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Titre: {{ $annonce->titre }}</h5>
                <p class="card-text">Superficie: {{ $annonce->superficie }} m²</p>
                <p class="card-text">Neuf: {{ $annonce->neuf ? 'Oui' : 'Non' }}</p>
                <p class="card-text">Prix: {{ $annonce->prix }} €</p>
                <p class="card-text">Type: {{ $annonce->type }}</p>
                <p class="card-text">Description: {{ $annonce->description }}</p>
            </div>
        </div>
    </div>
@endsection
