@extends('layouts.base_layout')

@section('title')
    Comic Book
@endsection

@section('main_content')
<div class="container">
    <h1>Questa è la pagina del singolo fumetto</h1>

    <h5>{{ $comic->title }}</h5>
    <ul>
        
        <li>
            {{ $comic->description }}
        </li>
        <li>
            <img src="{{ $comic->thumb }}" alt="copertina fumetto {{ $comic->title }}">
        </li>
        <li>
            price :${{ $comic->price }}
        </li>
        <li>
            series: {{ $comic->series }}
        </li>
        <li>
            sale date: {{ $comic->sale_date }}
        </li>
        <li>
            type: {{ $comic->type }}
        </li>
    </ul>

    <a href=" {{ route('home.index')}} " class="btn btn-primary">torna alla home</a>
    <a href=" {{ route('comics.index')}} " class="btn btn-primary">torna alla pagina principale dei fumetti</a>
</div>
@endsection