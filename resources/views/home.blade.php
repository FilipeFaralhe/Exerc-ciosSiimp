@extends('layout.app')

@section('content')
    <div class="container">
        <a href="{{ route('exercises1.index') }}">
            <div class="card-exercises greenyellow">
                Exercício 01
            </div>
        </a>
        <a href="{{ route('exercises2.index') }}">
            <div class="card-exercises purple">
                Exercício 02
            </div>
        </a>
        <a href="{{ route('exercises3.index') }}">
            <div class="card-exercises red">
                Exercício 03
            </div>
        </a>
        <a href="{{ route('exercises4.index') }}">
            <div class="card-exercises orange">
                Exercício 04
            </div>
        </a>
        <a href="{{ route('exercises5.index') }}">
            <div class="card-exercises light-blue">
                Exercício 05
            </div>
        </a>
        <a href="{{ route('exercises6.index') }}">
            <div class="card-exercises imperial-primer">
                Exercício 06
            </div>
        </a>
        <a href="{{ route('exercises7.index') }}">
            <div class="card-exercises yellow">
                Exercício 07
            </div>
        </a>
    </div>
@endsection
