@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>Liste des Annonces</h1>
        <a href="{{ route('annonces.create') }}" class="btn btn-primary mb-3">Ajouter une Annonce</a>
        <table class="table table-responsive table-dark table-striped table-hover border-white">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Superficie</th>
                    <th>Neuf</th>
                    <th>Prix</th>
                    <th>Type</th>
                    <th>Actions</th>
                    <th>description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($annonces as $annonce)
                    <tr>
                        <td>{{ $annonce->titre }}</td>
                        <td>{{ $annonce->superficie }} m²</td>
                        <td>{{ $annonce->neuf ? 'Oui' : 'Non' }}</td>
                        <td>{{ $annonce->prix }} dhs </td>
                        <td>{{ $annonce->type }}</td>
                        <td class=" mx-2 p-2">
                            <a href="{{ route('annonces.show', $annonce->id) }}" class="">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('annonces.edit', $annonce->id) }}" class="">
                                <i class="bi bi-pencil"></i>
                            </a>

                            <form action="{{ route('annonces.destroy', $annonce->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')

                                    <a href="{{ route('annonces.destroy', $annonce->id) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette annonce ?')">
                                        <i class="bi bi-trash"></i>
                                    </a>


                            </form>
                        </td>
                        <td>{{ $annonce->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
