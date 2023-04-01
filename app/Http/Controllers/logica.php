<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logica extends Controller
{
    
  public  function struttura () {
        return view('struttura');
    }

   public function corsi () {
        return view('corsi');}


      public  function dovesiamo () {
            return view('dove-siamo');}


          public  function contatti () {
                return view('contatti');}





}
