@extends('layouts.app')

@section('page-name', 'Dettaglio album ' . $album->album_name)

@section('main-content')
<div class="container text-light">
        <h2 class="mt-2">{{ ('Dettaglio album ' . $album->album_name) }}</h2>
        <div class="row mt-5">
            <div class="col-6">
                <p><strong>Album: </strong>{{ $album->album_name }}</p>
                <p><strong>Titolo: </strong>{{ $album->name }}</p>
                <p><strong>Autore: </strong>{{ $album->author }}</p>
                <p><strong>Casa Discografica: </strong>{{ $album->editor }}</p>
                <p><strong>Genere: </strong>{{ $album->type }}</p>
                <p><strong>Durata: </strong>{{ $album->lenght }} minuti</p>
            </div>
            <div class="col-6">
                <img src="{{ $album->poster }}" alt="">
                <p class="mt-4"><strong>Descrizione: </strong>{{ $album->description }}</p>
            </div>
        </div>
    </div>
@endsection