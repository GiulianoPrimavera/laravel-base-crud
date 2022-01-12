@extends('layouts.base_layout')

@section('title')
    Home
@endsection

@section('main_content')
<h1>Questa è la pagina principale</h1>
<div class="container">
    <ul>
        @foreach ($comics as $comic)
        <li>
            {{ $comic->title }}
        </li>
        @endforeach
    </ul>
</div>
@endsection