@extends('layouts.app')

@section('page-name', 'Dettaglio album ' . $album->album_name)

@section('main-content')
<div class="container">
        <h2>{{ ('Dettaglio album ' . $album->album_name) }}</h2>
        <div class="row">
            <div class="col-6">
                <p><strong>Album: </strong>{{ $album->album_name }}</p>
                <p><strong>Titolo: </strong>{{ $album->name }}</p>
                <p><strong>Autore: </strong>{{ $album->author }}</p>
                <p><strong>Casa Discografica: </strong>{{ $album->editor }}</p>
                <p><strong>Genere: </strong>{{ $album->type }}</p>
                <p><strong>Durata: </strong>{{ $album->lenght }}</p>
                <p><strong>Descrizione: </strong>{{ $album->description }}</p>
            </div>
            <div class="col-6">
                <img src="{{ $album->poster }}" alt="">
            </div>
        </div>
    </div>
@endsection