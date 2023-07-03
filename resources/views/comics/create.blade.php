@extends('layouts.base')
 
@section('contents')
<h1>Inserisci un nuovo fumetto</h1>
    <form method="POST" action="{{ route('comics.store') }}">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title">
        </div>
        <div class="mb-3">
            <label for="tipe" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="tipe">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
         <textarea class="form-control" id="description" rows="3"></textarea>
          
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data</label>
            <input type="text" class="form-control" id="sale_date">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price">
        </div>

        <button class="btn btn-primary">Salva</button>
    </form>
@endsection