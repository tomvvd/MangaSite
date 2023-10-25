@extends('canevas')
@section('title', 'Nouvelle série')
@section('content')
    <h2>Création d'une nouvelle série</h2>
    <form action="/serie/create" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="titre">Titre :</label>
            <input type="text" name="titre" id="titre" required>
        </div>

        <div>
            <label for="auteur">Auteur :</label>
            <input type="text" name="auteur" id="auteur" required>
        </div>

        <div>
            <label for="nombre_volumes">Nombre de volumes :</label>
            <input type="number" name="nombre_volumes" id="nombre_volumes" required>
        </div>

        <div>
            <label for="date_creation">Date de création :</label>
            <input type="date" name="date_creation" id="date_creation" required>
        </div>

        <div>
            <label for="image">Télécharger une image :</label>
            <input type="file" name="image" id="image">
        </div>

        <div>
            <input type="checkbox" name="serie_finie" id="serie_finie">
            <label for="serie_finie">La série est finie</label>
        </div>

        <div>
            <button type="submit">Créer la série</button>
        </div>
    </form>
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection