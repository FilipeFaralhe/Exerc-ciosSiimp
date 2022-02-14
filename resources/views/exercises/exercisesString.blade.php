@extends('layout.app')

@section('content')
    <div class="container-form">
        <div class="header">
            <div class="title">
                <a class="back" href="{{ route('home') }}">Voltar</a>
                <h1>{{ $title }}</h1>
            </div>
            @isset($input)
                @empty($input)
                    <p class="message">{{ $message ?? "" }}</p>
                @endempty
            @endisset
        </div>
        <form class="form-content" action="{{ route($routeSubmit) }}" method="post">
            {{ csrf_field() }}
            <label for="input">{{ $label }}</label>
            <input id="input" name="input" type="{{ $type }}" placeholder="{{ $placeholder }}" value="{{ old('input', $input ?? "") }}">
            <button type="submit">Ok</button>
        </form>
        <div class="content">

            @if($_SERVER['PATH_INFO'] === '/exercises4')
                @foreach($itensList as $itemList)
                    {{ $itemList }}<br>
                @endforeach
            @else
                {!! $content ?? "" !!}
            @endif
        </div>
    </div>
@endsection
