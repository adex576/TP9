@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Modifier l'Annonce</h1>
        <form action="{{ route('annonces.update', $annonce->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" value="{{ $annonce->titre }}" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $annonce->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="superficie">Superficie </label>
                <input type="number" class="form-control" id="superficie" name="superficie" value="{{ $annonce->superficie }}" required>
            </div>
            <div class="form-group">
                <label for="neuf">Neuf</label>
                <select class="form-control" id="neuf" name="neuf" required>
                    <option value="">Sélectionnez</option>
                    <option value=1 {{ $annonce->neuf ? 'selected' : '' }}>Oui</option>
                    <option value=0 {{ !$annonce->neuf ? 'selected' : '' }}>Non</option>
                </select>
            </div>
            <div class="form-group">
                <label for="prix">Prix </label>
                <input type="number" class="form-control" id="prix" name="prix" value="{{ $annonce->prix }}" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $annonce->type }}" required>
            </div>
            <button type="submit" class="btn btn-primary" ">Mettre à jour</button>
        </form>
    </div>
@endsection
