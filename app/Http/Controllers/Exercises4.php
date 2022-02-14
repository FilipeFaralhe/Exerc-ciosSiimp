<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercises4 extends Controller
{
    public function index() {
        $title = 'Exercicio 04';
        $label = 'Número';
        $placeholder = 'ex: 16';
        $type = 'number';
        $routeSubmit = 'exercises4.store';
        $itensList = [];
        return view('exercises.exercisesString', compact('title', 'label', 'placeholder', 'routeSubmit', 'type', 'itensList'));
    }

    public function store() {
        $title = 'Exercicio 04';
        $label = 'Número';
        $placeholder = 'ex: 16';
        $type = 'number';
        $routeSubmit = 'exercises4.store';

        $input = $_POST['input'];
        $itensList = [];

        if ($input !== "" && $input > 0) {
            for ($inputIndex = 1; $inputIndex < $input; $inputIndex++) {
                switch ($inputIndex){
                    case $inputIndex % 3 == 0 && $inputIndex % 5 == 0:
                        array_push($itensList, 'HELLO WORLD');
                        break;
                    case $inputIndex % 3 == 0:
                        array_push($itensList, 'HELLO');
                        break;
                    case $inputIndex % 5 == 0:
                        array_push($itensList, 'WORLD');
                        break;
                    default:
                        array_push($itensList, $inputIndex);
                }
            }
            $message = "";
        } else {
            $message = "Digite um valor válido";
        }

        return view('exercises.exercisesString', compact('title', 'label', 'placeholder', 'routeSubmit', 'type', 'message', 'itensList', 'input'));
    }
}
