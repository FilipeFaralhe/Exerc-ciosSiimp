<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercises3 extends Controller
{
    public function index() {
        $title = 'Exercicio 03';
        $label = 'Números';
        $type = 'number';
        $placeholder = 'ex: 2756';
        $routeSubmit = 'exercises3.store';
        return view('exercises.exercisesString', compact('title', 'label', 'placeholder', 'routeSubmit', 'type'));
    }

    public function store() {
        $title = 'Exercicio 03';
        $label = 'Números';
        $placeholder = 'ex: 2756';
        $type = 'number';
        $routeSubmit = 'exercises3.store';
        $input = $_POST['input'];
        if ($input != "" && $input > 0) {
            $numberSplit = str_split($input); // transform string in array
            $content = array_sum($numberSplit); // transform string em integer and sum all numbers
            $message = "";
        } else {
            $content = "";
            $message = 'É preciso digitar alguns números';
        }

        return view('exercises.exercisesString', compact('input','title', 'label', 'placeholder', 'routeSubmit', 'type', 'message', 'content'));
    }
}
