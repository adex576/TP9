@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Ajouter une Annonce</h1>
        <form action="{{ route('annonces.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" id="titre" name="titre" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="superficie">Superficie </label>
                <input type="number" class="form-control" id="superficie" name="superficie" required>
            </div>
            <div class="form-group">
                <label for="neuf">Neuf</label>
                <select class="form-control" id="neuf" name="neuf" required>
                    <option value="">Sélectionnez</option>
                    <option value=1>Oui</option>
                    <option value=0>Non</option>
                </select>
            </div>
            <div class="form-group">
                <label for="prix">Prix </label>
                <input type="number" class="form-control" id="prix" name="prix" required>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter l'Annonce</button>

        </form>

    </div>

@endsection
