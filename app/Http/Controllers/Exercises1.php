<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\DeclareDeclare;

class Exercises1 extends Controller
{
    public function index() {
        $title = 'Exercicio 01';
        $label = 'Palavra';
        $placeholder = 'ex: Chocolate';
        $type = 'text';
        $routeSubmit = 'exercises1.store';
        return view('exercises.exercisesString', compact('title', 'label', 'placeholder', 'routeSubmit', 'type'));
    }

    public function store() {
        $title = 'Exercicio 01';
        $label = 'Palavra';
        $type = "text";
        $placeholder = 'ex: Chocolate';
        $routeSubmit = 'exercises1.store';
        $input = $_POST['input'];
        $vowelLower = ['a', 'e', 'i', 'o', 'u'];
        $vowelUpper = ['A', 'E', 'I', 'O', 'U'];

        if ( $input !== '') {
            $wordSplit = str_split($input); // transform string in array
            $wordLength = count($wordSplit);

            for ($indexWord = 0; $indexWord < $wordLength; $indexWord++) {
                for ($indexVowel = 0; $indexVowel < count($vowelLower); $indexVowel++) {
                    if ($wordSplit[$indexWord] == $vowelLower[$indexVowel]) {
                        unset($wordSplit[$indexWord]);
                        break;
                    } elseif ($wordSplit[$indexWord] == $vowelUpper[$indexVowel]) {
                        unset($wordSplit[$indexWord]);
                        break;
                    }
                }
            }

            $content = implode('', $wordSplit); // transform array in string
            $message = '';
        } else {
            $message = "É preciso digitar uma palavra";
            $content = "";
        }
        return view('exercises.exercisesString', compact('input', 'message', 'content', 'title', 'label', 'placeholder', 'routeSubmit', 'type'));
    }
}
