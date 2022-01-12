@extends('layouts.base_layout')

@section('title')
    Comic Book
@endsection

@section('main_content')
<div class="container">
    <h1>Questa è la pagina del singolo fumetto</h1>

    <h5>{{ $comic->title }}</h5>
</div>
@endsection