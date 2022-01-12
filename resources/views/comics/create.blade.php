@extends('layouts.base_layout')

@section('title')
    Create Comics
@endsection

@section('main_content')
<div class="container">
    <h1 class="pb-3">Questa è la pagina principale della creazione dei fumetti</h1>
    <form action="">
        
        <div class="mb-3">
            {{-- titolo --}}
            <label for="title" class="form-label">Inserisci titolo</label>
            <input type="text" class="form-control" id="title">
        </div>
        
        <div class="mb-3">
            {{-- descrizione --}}
            <label for="description" class="form-label">Inserisci descrizione</label>
            <input type="text" class="form-control" id="description">
        </div>

        <div class="mb-3">
            {{-- thumb-nail --}}
            <label for="thumb" class="form-label">Inserisci thumb-nail</label>
            <input type="text" class="form-control" id="thumb">
        </div>

        <div class="mb-3">
            {{-- prezzo --}}
            <label for="price" class="form-label">Inserisci prezzo</label>
            <input type="text" class="form-control" id="price">
        </div>

        <div class="mb-3">
            {{-- serie --}}
            <label for="series" class="form-label">Inserisci serie</label>
            <input type="text" class="form-control" id="series">
        </div>

        <div class="mb-3">
            {{-- data di uscita --}}
            <label for="sale_date" class="form-label">Inserisci data di uscita</label>
            <input type="text" class="form-control" id="sale_date">
        </div>

        <div class="mb-3">
            {{-- tipo --}}
            <label for="type" class="form-label">Inserisci tipo</label>
            <input type="text" class="form-control" id="type">
        </div>

        <div>
            <button class="btn btn-primary" type="submit">Invia</button>
        </div>

    </form>
</div>
@endsection