@extends('layouts.base')

@section('contents')
        <h1>{{ $comic->title}}</h1>
        <img src="{{$comic->thumb}}" alt="">
        <h2>Serie: {{ $comic->series}}</h2>
        <h2>Tipo: {{ $comic->type}}</h2>
        <p>{{ $comic->description }}</p>
        <h3>{{ $comic->sale_date}}</h3>
        <h3>{{ $comic->price}}</h3>
@endsection
