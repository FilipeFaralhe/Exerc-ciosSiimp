@extends('layout.app')

@section('content')
    <div class="container-form">
        <div class="header">
            <div class="title">
                <a class="back" href="{{ route('home') }}">Voltar</a>
                <h1>Exercício 07</h1>
            </div>
            @isset($input1, $input2)
                @if($input1 == "" || $input2 == "")
                    <p class="message">{{ $message ?? "" }}</p>
                @endif
            @endisset
        </div>
        <form class="form-content" action="{{ route('exercises7.store') }}" method="post">
            {{ csrf_field() }}
            <label for="input1">Primeiro valor</label>
            <input id="input1" name="input1" type="number" placeholder="ex: 1" value="{{ old('input1', $input1 ?? "") }}">
            <label for="input2">Segundo valor</label>
            <input id="input2" name="input2" type="number" placeholder="ex: 10" value="{{ old('input2', $input2 ?? "") }}">
            <button type="submit">Ok</button>
        </form>
        <div class="content">
            {!! $value ?? "" !!}
        </div>
    </div>
@endsection
