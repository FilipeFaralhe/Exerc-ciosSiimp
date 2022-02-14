<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercises6 extends Controller
{
    public function index() {
        $title = 'Exercicio 06';
        $label = 'Palavra/Frase';
        $type = 'text';
        $placeholder = 'ex: Amor a Roma';
        $routeSubmit = 'exercises6.store';
        return view('exercises.exercisesString', compact('title', 'label', 'placeholder', 'routeSubmit', 'type'));
    }

    public function store() {
        $title = 'Exercicio 06';
        $label = 'Palavra/Frase';
        $placeholder = 'ex: Amor a Roma';
        $type = 'text';
        $routeSubmit = 'exercises6.store';
        $input = $_POST['input'];

        // reverse string using regex
        function mb_strrev($str){
            preg_match_all('/./us', $str, $array);
            return implode('', array_reverse($array[0]));
        }

        if ($input != "") {
            $isPolindromo = preg_replace('/[.\;\,\ " "]+/', '', $input); // remove special characters
            $isPolindromo = strtolower($isPolindromo);

            if (mb_strrev($isPolindromo) === $isPolindromo){
                $content = "<p style='color: blue'>É um palíndromo</p>";
            } else {
                $isPolindromoSplit = str_split($isPolindromo);
                for ($polindromoIndex = 0; $polindromoIndex < count($isPolindromoSplit); $polindromoIndex++) {
                    unset($isPolindromoSplit[$polindromoIndex]);
                    $polindromoJoin = implode('', $isPolindromoSplit);

                    if ($polindromoJoin == mb_strrev($polindromoJoin)) {
                        $content = "<p style='color: rebeccapurple'>Pode se tornar um políndromo</p>";
                        break;
                    } else {
                        $content = "<p style='color: red'>Não é um palíndromo</p>";
                    }
                    $isPolindromoSplit = str_split($isPolindromo);
                }
            }
            $message = '';
        } else {
            $content = "";
            $message = 'É preciso digitar uma palavra e/ou frase';
        }

        return view('exercises.exercisesString', compact('input','title', 'label', 'placeholder', 'routeSubmit', 'type', 'message', 'content'));
    }
}
