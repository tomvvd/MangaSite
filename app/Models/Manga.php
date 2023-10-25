<?php
namespace App\Models;
use \Illuminate\Support\Facades\DB;

class Manga {
    public static function findAll(){
        $mangas = DB::select("select id,titre,auteur,nombre_volumes,date_premiere_parution,couverture,serie_finie from series");
        return $mangas;
    } 
    
    public static function insert($titre,$auteur,$nombre_volumes,$date_creation,$couverture,$serie_finie){
        DB::insert(
            "INSERT INTO series (titre, auteur, nombre_volumes, date_premiere_parution, couverture, serie_finie) VALUES (?, ?, ?, ?, ?, ?)",
            [$titre, $auteur, $nombre_volumes, $date_creation, $couverture, $serie_finie]
        );
    }

    public static function getCharacters($serie_id){
        $personnages = DB::select("select id,nom,serie_id,type,description from personnages where serie_id=".$serie_id);
        return $personnages;
    } 
}