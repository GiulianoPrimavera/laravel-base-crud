@extends('layouts.base_layout')

@section('title')
    Comics
@endsection

@section('main_content')
<div class="container">
    <h1>Questa è la pagina principale dei fumetti</h1>

    <a href="{{ route('comics.create') }}" class="btn btn-primary my-3">Aggingi Fumetto</a>

    <ul>
        @foreach ($comics as $comic)
        <li>
            {{ $comic->title }}
        </li>
        @endforeach
    </ul>
</div>
@endsection