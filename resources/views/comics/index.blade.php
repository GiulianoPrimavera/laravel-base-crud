@extends('layouts.base_layout')

@section('title')
    Home
@endsection

@section('main_content')
<div class="container">
    <h1>Questa è la pagina principale</h1>

    <a href="" class="btn btn-primary my-3">Aggingi Fumetto</a>

    <ul>
        @foreach ($comics as $comic)
        <li>
            {{ $comic->title }}
        </li>
        @endforeach
    </ul>
</div>
@endsection