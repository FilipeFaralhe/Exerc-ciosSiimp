<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exercises7 extends Controller
{
    public function index() {
        return view('exercises.exercises7');
    }

    public function store() {
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
        $value = 0;

        if ($input1 !== "" && $input2 !== ""){
            if ($input1 < $input2) {
                for ($inputIndex = $input1; $inputIndex <= $input2; $inputIndex++) {
                    $value += $inputIndex;
                    $message = "";
                }
            } elseif ($input1 === $input2){
                $value = $input1;
                $message = "";
            } else{
                $value = 0;
                $message = "";
            }
        }elseif ($input1 === "" && $input2 === "") {
            $message = "É preciso digitar dois valores";
            $value = "";
        } elseif ($input1 === "") {
            $message = "É preciso digitar o primeiro valor";
            $value = "";
        } elseif ($input2 === "") {
            $message = "É preciso digitar o segundo valor";
            $value = "";
        } else {
            $message = "É preciso digitar o segundo valor";
        }
        return view('exercises.exercises7', compact('value', 'message', 'input1', 'input2'));
    }
}
