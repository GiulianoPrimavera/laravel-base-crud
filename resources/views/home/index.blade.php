@extends('layouts.base_layout')

@section('title')
    Home
@endsection

@section('main_content')
    <div class="container">
        <h1>Questa è la home</h1>
    
        <a href="{{ route('comics.index') }}">Vai alla sezione Comics</a>

    </div>
@endsection