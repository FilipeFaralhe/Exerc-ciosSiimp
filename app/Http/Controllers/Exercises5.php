<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercises5 extends Controller
{
    public function index() {
        $title = 'Exercicio 05';
        $label = 'Palavra/Frase';
        $type = 'text';
        $placeholder = 'ex: Amor a Roma';
        $routeSubmit = 'exercises5.store';
        return view('exercises.exercisesString', compact('title', 'label', 'placeholder', 'routeSubmit', 'type'));
    }

    public function store() {
        $title = 'Exercicio 05';
        $label = 'Palavra/Frase';
        $placeholder = 'ex: Amor a Roma';
        $type = 'text';
        $routeSubmit = 'exercises5.store';
        $input = $_POST['input'];

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
                $content = "<p style='color: red'>Não é um palíndromo</p>";
            }
            $message = '';
        } else {
            $content = "";
            $message = 'É preciso digitar uma palavra e/ou frase';
        }

        return view('exercises.exercisesString', compact('input','title', 'label', 'placeholder', 'routeSubmit', 'type', 'message', 'content'));
    }
}
