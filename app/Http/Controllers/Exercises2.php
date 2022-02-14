<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercises2 extends Controller
{
   public function index() {
       $title = 'Exercicio 02';
       $label = 'Frase';
       $placeholder = 'ex: Só sei que nada sei';
       $type = 'text';
       $routeSubmit = 'exercises2.store';
       return view('exercises.exercisesString', compact('title', 'label', 'placeholder', 'routeSubmit', 'type'));
   }

    public function store() {
        $title = 'Exercicio 02';
        $label = 'Frase';
        $type = 'text';
        $placeholder = 'ex: Só sei que nada sei';
        $routeSubmit = 'exercises2.store';

        $input = $_POST['input'];

        if ($input !== "") {
            $phraseSplit = preg_replace('/[.\;\,]+/', '', $input); // remove caractes special characters
            $phraseSplit = explode(' ', $phraseSplit); // separate string by spaces
            $content = $phraseSplit[0];

            for ($phraseIndex = 0; $phraseIndex < count($phraseSplit); $phraseIndex++ ) {
                if (mb_strlen($content, 'utf8') < mb_strlen($phraseSplit[count($phraseSplit) - 1 != $phraseIndex ? $phraseIndex + 1 : $phraseIndex], 'utf8')) {
                    $content = $phraseSplit[count($phraseSplit) - 1 != $phraseIndex ? $phraseIndex + 1 : $phraseIndex];
                }
            }
            $message = "";
        } else {
            $message = "É preciso digitar uma frase";
            $content = "";
        }

        return view('exercises.exercisesString', compact('title', 'label', 'placeholder', 'routeSubmit', 'type', 'message', 'content', 'input'));
    }
}
