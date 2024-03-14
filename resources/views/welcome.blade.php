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
<h1 class="">BOOTFLIX</h1>
{{-- {{dd($movies)}}  --}}
<div class="row row-cols-lg-6 justify-content-between gap-4 p-3">
    @foreach ($movies as $item)
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h2>{{$item['title']}}</h2>
                <p class="card-text">{{$item['nationality']}}</p>
                <p>{{$item['date']}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
    
@endsection
