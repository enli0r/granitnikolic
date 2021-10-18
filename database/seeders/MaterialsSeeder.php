<?php

namespace Database\Seeders;

use App\Models\Material;
use Illuminate\Database\Seeder;

class MaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Material::create([
            'ime' => 'impala',
            'opis' => '<p class="card-text">Prirodni kamen Impala je crne boje, iz Irana. <span>Poseban je zbog svoje prirodne tvrdoće i kompaktnosti</span>, ima elegantnu notu i daje luksuzan i ekskluzivan izgled.</p>',
            'slika' => 'https://i.ibb.co/0YCXP9Q/impala.jpg'
        ]);

        Material::create([
            'ime' => 'bengal',
            'opis' => '<p class="card-text"><span>Bengal je dobro poznati crni granit iz Indije</span>. Njegova duboka crna boja posipana je točkicama koje variraju od belkaste do plavkaste boje.</p>',
            'slika' => 'https://i.ibb.co/QnmxKWd/bengal.jpg'
        ]);

        Material::create([
            'ime' => 'india nero',
            'opis' => '<p class="card-text">India Nero black je kamen poreklom iz Indije. <span>Karakteriše ga velika gustina i tvrodća</span>. Ima veliku primenu u izradi nadgrobnih spomenika.</p>',
            'slika' => 'https://i.ibb.co/5M338X0/india-nero.jpg'
        ]);

        Material::create([
            'ime' => 'guna black',
            'opis' => '<p class="card-text">Guna black je visoka klasa crnog granita. Smatra se <span>najelegantnijim i najluksuznijim crnim granitom za izradu spomenika</span>.</p>',
            'slika' => 'https://i.ibb.co/2hKpxMR/guna-black.jpg'
        ]);

        Material::create([
            'ime' => 'africa red',
            'opis' => '<p class="card-text">Granit Africa Red svetski je poznat granit iz Južnoafričke Republike. <span>Odlikuje ga tvrdoća i tradicionalno se koristi za izradu spomenika</span>. Spada u kategoriju crvenih granita.</p>',
            'slika' => 'https://i.ibb.co/9VSLF00/africa-red.jpg'
        ]);

        Material::create([
            'ime' => 'blue pearl',
            'opis' => '<p class="card-text">Čuveni kamen Blue Pearl se odlikuje velikim kristalima plav-sive nijanse, koji ga čine <span>kamenom visoke estetike i široke primene</span>.</p>',
            'slika' => 'https://i.ibb.co/wKQZBrS/blue-pearl.jpg'
        ]);

        Material::create([
            'ime' => 'bianco crystal',
            'opis' => '<p class="card-text">Bianco Crystal je granit zasnovan na <span>sivo-beloj boji prožet smeđim, tamnosivim i crnim kristalima</span>. Poseduje visoko esetičku komponentu.</p>',
            'slika' => 'https://i.ibb.co/wSsgVbk/blanco-crystal.jpg'
        ]);

        Material::create([
            'ime' => 'angola nero',
            'opis' => '<p class="card-text">Nero Angola je crni granit iz Angole. Kao i svi crni graniti, opšte je poznato da su njegove <span>karakteristike veoma zahvalne za spoljnu i unutrašnju upotrebu</span>.</p>',
            'slika' => 'https://i.ibb.co/wwX3x8S/angola-nero.jpg'
        ]);

        Material::create([
            'ime' => 'paradiso',
            'opis' => '<p class="card-text">Paradiso je granit indijskog porekla. Veoma je popularan u <span>privatnim rezidencijama za izradu kamina, stepeništa, kuhinjskih ploča, ali i spomenika...</span></p>',
            'slika' => 'https://i.ibb.co/F5K88pF/paradiso.jpg'
        ]);

        Material::create([
            'ime' => 'multicolor rosso',
            'opis' => '<p class="card-text">Multicolor je granit indijskog porekla. <span>Ima visoki kvalitet i široku primenu</span>. Koristi za kupatila, kuhinje, stepeništa, fasade, kamine, spomen ploče... </p>',
            'slika' => 'https://i.ibb.co/xDjvwtV/multicolor-rosso.jpg'
        ]);

        Material::create([
            'ime' => 'porrihno rosso',
            'opis' => '<p class="card-text">Rosa Porino je granit španskog porekla. <span>Veoma popularan zbog cene i kvaliteta</span>. Zahvalan je za radove u enterijeru i u eksterijeru: stepeništa, fasade, spomenike... </p>',
            'slika' => 'https://i.ibb.co/Z6Y6ywm/porrihno-rosso.jpg'
        ]);
    }
}
