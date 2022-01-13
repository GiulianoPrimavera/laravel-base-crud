@extends('layouts.base_layout')

@section('title')
    Comic edit 
@endsection

@section('main_content')
<div class="container">
    <h1>Questa è la pagina dove puoi modificare un fumetto</h1>

    <form action="{{ route('comics.update', $comicBook->id) }}" method="post">
        @csrf


        <div class="mb-3">
            {{-- titolo --}}
            <label for="title" class="form-label">Inserisci nuovo titolo</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $comicBook->title }}">
        </div>
        
        <div class="mb-3">
            {{-- descrizione --}}
            <label for="description" class="form-label">Inserisci nuovo descrizione</label>
            <input type="text" class="form-control" name="description" id="description" value="{{ $comicBook->description }}">
        </div>

        <div class="mb-3">
            {{-- thumb-nail --}}
            <label for="thumb" class="form-label">Inserisci nuovo thumb-nail</label>
            <input type="text" class="form-control" name="thumb" id="thumb" value="{{ $comicBook->thumb }}">
        </div>

        <div class="mb-3">
            {{-- prezzo --}}
            <label for="price" class="form-label">Inserisci nuovo prezzo</label>
            <input type="text" class="form-control" name="price" id="price" value="{{ $comicBook->price }}">
        </div>

        <div class="mb-3">
            {{-- serie --}}
            <label for="series" class="form-label">Inserisci nuovo serie</label>
            <input type="text" class="form-control" name="series" id="series" value="{{ $comicBook->series }}">
        </div>

        <div class="mb-3">
            {{-- data di uscita --}}
            <label for="sale_date" class="form-label">Inserisci nuovo data di uscita</label>
            <input type="text" class="form-control" name="sale_date" id="sale_date" value="{{ $comicBook->sale_date }}">
        </div>

        <div class="mb-3">
            {{-- tipo --}}
            <label for="type" class="form-label">Inserisci nuovo tipo</label>
            <input type="text" class="form-control" name="type" id="type" value="{{ $comicBook->type }}">
        </div>

        <div>
            <button class="btn btn-primary" type="submit">Aggiorna</button>
        </div>

    </form>
</div>
@endsection