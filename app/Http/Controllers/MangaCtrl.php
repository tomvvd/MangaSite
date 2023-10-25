<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Manga;
use Exception;

class MangaCtrl extends Controller
{
    public function index()
    {
        $mangas = Manga::findAll();
        return view('home',['mangas'=>$mangas]);
    }

    public function addManga(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'auteur' => 'required',
            'nombre_volumes' => 'required|integer',
            'date_creation' => 'required|date',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Exemple de validation d'image (max 2 Mo)
        ]);

        $titre = $request->input('titre');
        $auteur = $request->input('auteur');
        $nombre_volumes = $request->input('nombre_volumes');
        $date_creation = $request->input('date_creation');
        $couverture = $request->file('image');
        $serie_finie = $request->boolean('serie_finie');
        
        $couverture->storeAs('public/', $couverture->getClientOriginalName());

        try {
            Manga::insert($titre, $auteur, $nombre_volumes, $date_creation, $couverture->getClientOriginalName(), $serie_finie);
            return redirect()->route('serie.create')->with('success', 'La série a été créée avec succès !');
        } catch (\Exception $e) {
            return redirect()->route('serie.create')->withErrors('Une erreur est survenue lors de la création de la série.');
        }
    }

    public function getCharactersApi($serie_id)
    {
        $personnages = Manga::getCharacters($serie_id);

        return response()->json($personnages);
    }
}