<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logica extends Controller


{
    

 public static $corsi = [
    [
        'id' => 1,
        'name' => 'zumba', 
        'tag' => 'zumba',
        'image' => 'https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/fare-zumba-fa-dimagrire-leggi-di-piu-1637757677.jpg'
    ],
    [
        'id' => 2,
        'name' => 'Mma', 
        'tag' => 'mma',
        'image' => 'https://www.bonoacademy.it/wp-content/uploads/2015/03/BonoAcademy.jpg'
    ],
    [
        'id' => 3,
        'name' => 'yoga',  
        'tag' => 'yoga',
        'image' => 'https://www.palestracitydancestudio.it/wp-content/uploads/2015/04/yoga-palestra-city-dance-studio-pavia.jpg'
    ],

    [
      'id' => 4,
      'name' => 'crossfit',  
      'tag' => 'crossfit',
      'image' => 'https://www.fitnessway.it/wp-content/uploads/2022/06/aprire-palestra-crossfit.jpg'
  ],

  [
    'id' => 5,
    'name' => 'calisthenics',  
    'tag' => 'calisthenics',
    'image' => 'https://www.projectinvictus.it/wp-content/uploads/2019/02/Calisthenics-Erik-Neri-3.jpg'
],

[
  'id' => 6,
  'name' => 'ginnastica posturale',  
  'tag' => 'ginnastica',
  'image' => 'https://fisiokinetiksport.it/wp-content/uploads/2020/06/Ginnastica-posturale.jpg'
],

[
  'id' => 7,
  'name' => 'danza moderna',  
  'tag' => 'danza-moderna',
  'image' => 'http://i1.wp.com/www.centrodanza.eu/wp-content/uploads/2019/10/jazzballet-cursus.jpg'
],

[
  'id' => 7,
  'name' => 'karate',  
  'tag' => 'karate',
  'image' => 'https://www.provincialavoro.roma.it/wp-content/uploads/2017/07/Come-Aprire-una-Palestra-di-Karate.jpg'
],


[
  'id' => 8,
  'name' => 'pugilato',  
  'tag' => 'pugilato',
  'image' => 'http://www.sportallarovescia.it/sar5/images/SportPopular/20140125_142706_web.jpg'
],

[
  'id' => 9,
  'name' => 'danza classica',  
  'tag' => 'classica',
  'image' => 'https://www.principessadanza.it/wp-content/uploads/Big_Thumbnail_16_9.jpg'
],













];
  




  public  function struttura () {
        return view('struttura');
    }

   public function corsi () {
        return view('corsi', ['corsi' => self::$corsi]);}

        public function dettagli ($id) {

          foreach (self::$corsi as $corso) {
            if ($id == $corso['id']){
              return view ('dettagli', ['corso' =>$corso]);
            }
          }

          abort (404);
        }
          public  function contatti () {
                return view('contatti');}


              public  function homepage () {
                  return view('homepage');}

                 public function indirizzo() {return view('indirizzo');}




}
