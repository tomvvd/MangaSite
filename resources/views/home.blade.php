@extends('canevas')
@section('title', 'Page d\'accueil')
@section('content')
    <div id="manga-container">
        @if (count($mangas) === 0)
            <p>Rien pour le moment</p>
        @else
            @foreach ($mangas as $manga)
                <div class="manga" id="manga-{{$manga->id}}">
                    <h3>{{$manga->titre}}</h3>
                    <img src="{{ asset('storage/' . $manga->couverture) }}" alt="Couverture du manga">
                    <p>Auteur : {{$manga->auteur}}</p>
                    <p>Nombre de volumes : {{$manga->nombre_volumes}}</p>
                    <p>Date de création : {{$manga->date_premiere_parution}}</p>
                    @if ($manga->serie_finie)
                        <p>La série est finie : oui</p>
                    @else
                        <p>La série est finie : non</p>
                    @endif
                    <p id = "persos-{{$manga->id}}"></p>
                </div>
            @endforeach
        @endif
    </div>
    <script>
        $('.manga').on('click', function() {
            var mangaId = this.id.split('-')[1];
            var apiUrl = 'http://127.0.0.1:8000/api/serie/' + mangaId + '/characters';

            $.ajax({
                url: apiUrl,
                type: 'GET',
                dataType: 'json',
                success: function(characters) {
                    // Une fois les personnages récupérés, affichez-les dans la div manga
                    $('#persos-' + mangaId).empty().append("Personnages : ");
                    characters.forEach(function(character) {
                        $('#persos-' + mangaId).append(character.nom+" / ");
                    });
                },
                error: function() {
                }
            });
        });
    </script>  
@endsection