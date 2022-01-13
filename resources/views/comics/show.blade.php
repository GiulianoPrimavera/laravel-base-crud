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
    <a href=" {{ route('comics.index')}} " class="btn btn-success">torna alla pagina principale dei fumetti</a>
    <a href=" {{ route('comics.edit', $comic->id)}} " class="btn btn-secondary">modifica questo fumetto</a>
    <a href=" {{ route('comics.destroy', $comic->id)}} " class="btn btn-danger">elimina questo fumetto</a>
</div>
@endsection