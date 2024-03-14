@extends('layouts.basic')

@section('title', 'Benvenuto | Home')

@section('style')
    <style lang="scss">
        li {
            list-style-type: circle;
        }
    </style>
@endsection

@section('content')
    <h1 class="">Pagina di benvenuto</h1>
    {{dd($movies)}}
    
@endsection
