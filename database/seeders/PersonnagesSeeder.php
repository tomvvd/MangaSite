<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonnagesSeeder extends Seeder
{
    public function run()
    {
        DB::table('personnages')->insert([
            [
                'id' => 1,
                'nom' => 'Monkey D. Luffy',
                'serie_id' => 1,
                'type' => 'Shōnen',
                'description' => "Capitaine de l'équipage du Chapeau de Paille, utilisateur du Fruit du Caoutchoutier.",
            ],
            [
                'id' => 2,
                'nom' => 'Roronoa Zoro',
                'serie_id' => 1,
                'type' => 'Bushido',
                'description' => "Épéiste habile et membre de l'équipage du Chapeau de Paille.",
            ],
            [
                'id' => 3,
                'nom' => 'Nami',
                'serie_id' => 1,
                'type' => 'Femme fatale',
                'description' => "Navigatrice de l''équipage du Chapeau de Paille et voleuse talentueuse.",
            ],
            [
                'id' => 4,
                'nom' => 'Tony Tony Chopper',
                'serie_id' => 1,
                'type' => 'Animal transformé',
                'description' => "Renne ayant mangé le Fruit de l''Humain, capable de prendre une forme humaine.",
            ],
            [
                'id' => 5,
                'nom' => 'Naruto Uzumaki',
                'serie_id' => 2,
                'type' => 'Héros énergique',
                'description' => "Ninja déterminé à devenir le Hokage et porteur du renard à neuf queues.",
            ],
            [
                'id' => 6,
                'nom' => 'Sasuke Uchiha',
                'serie_id' => 2,
                'type' => 'Antihéros',
                'description' => "Ancien membre du clan Uchiha et rival de Naruto.",
            ],
            [
                'id' => 7,
                'nom' => 'Sakura Haruno',
                'serie_id' => 2,
                'type' => 'Héroïne',
                'description' => "Ninja médicale et amie d''enfance de Naruto.",
            ],
            [
                'id' => 8,
                'nom' => 'Kakashi Hatake',
                'serie_id' => 2,
                'type' => 'Sensei mystérieux',
                'description' => "Ninja expérimenté et sensei de l''équipe de Naruto.",
            ],
            [
                'id' => 9,
                'nom' => 'Eren Yeager',
                'serie_id' => 3,
                'type' => 'Héros rebelle',
                'description' => "Membre du Bataillon d''exploration, déterminé à éliminer les Titans.",
            ],
            [
                'id' => 10,
                'nom' => 'Mikasa Ackerman',
                'serie_id' => 3,
                'type' => 'Protectrice dévouée',
                'description' => "Amie proche d''Eren et combattante d''élite.",
            ],
            [
                'id' => 11,
                'nom' => 'Armin Arlert',
                'serie_id' => 3,
                'type' => 'Stratège',
                'description' => "Ami d''enfance d''Eren et tacticien intelligent.",
            ],
            [
                'id' => 12,
                'nom' => 'Levi Ackerman',
                'serie_id' => 3,
                'type' => 'Badass',
                'description' => "Caporal-chef du Bataillon d''exploration et soldat d''élite.",
            ],
            [
                'id' => 13,
                'nom' => 'Light Yagami',
                'serie_id' => 4,
                'type' => 'Antihéros',
                'description' => "Détenteur du Death Note et connu sous le nom de Kira.",
            ],
            [
                'id' => 14,
                'nom' => 'L',
                'serie_id' => 4,
                'type' => 'Détective génial',
                'description' => "Détective talentueux et rival de Light.",
            ],
            [
                'id' => 15,
                'nom' => 'Misa Amane',
                'serie_id' => 4,
                'type' => 'Fangirl obsessionnelle',
                'description' => "Idol japonaise et seconde propriétaire du Death Note.",
            ],
            [
                'id' => 16,
                'nom' => 'Ryuk',
                'serie_id' => 4,
                'type' => 'Shinigami spectateur',
                'description' => "Shinigami curieux ayant laissé tomber son Death Note dans le monde humain.",
            ],
            [
                'id' => 17,
                'nom' => 'Izuku Midoriya',
                'serie_id' => 5,
                'type' => 'Héros en devenir',
                'description' => "Étudiant déterminé à devenir un grand héros.",
            ],
            [
                'id' => 18,
                'nom' => 'Katsuki Bakugo',
                'serie_id' => 5,
                'type' => 'Rival',
                'description' => "Étudiant arrogant mais talentueux.",
            ],
            [
                'id' => 19,
                'nom' => 'Ochaco Uraraka',
                'serie_id' => 5,
                'type' => 'Fille-next-door',
                'description' => "Étudiante avec le pouvoir de manipuler la gravité.",
            ],
            [
                'id' => 20,
                'nom' => 'Shoto Todoroki',
                'serie_id' => 5,
                'type' => 'Anti-héros',
                'description' => "Étudiant doté de pouvoirs de glace et de feu.",
            ],
            [
                'id' => 21,
                'nom' => 'Tanjiro Kamado',
                'serie_id' => 6,
                'type' => 'Héros compatissant',
                'description' => "Pourfendeur de démons déterminé à sauver sa sœur.",
            ],
            [
                'id' => 22,
                'nom' => 'Nezuko Kamado',
                'serie_id' => 6,
                'type' => 'Démon bienveillant',
                'description' => "Sœur de Tanjiro, transformée en démon mais gardant son humanité.",
            ],
            [
                'id' => 23,
                'nom' => 'Zenitsu Agatsuma',
                'serie_id' => 6,
                'type' => 'Coward',
                'description' => "Pourfendeur de démons peureux mais talentueux.",
            ],
            [
                'id' => 24,
                'nom' => 'Inosuke Hashibira',
                'serie_id' => 6,
                'type' => 'Sauvageon',
                'description' => "Pourfendeur de démons sauvage et téméraire.",
            ],
        ]);
    }
}
