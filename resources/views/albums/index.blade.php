@extends('layouts.app')

@section('page-name', 'Lista albums')

@section('main-content')
  <div class="container">
    <h2 class="text-light my-3">Lista degli Album</h2>
    
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titolo</th>
          <th scope="col">Album</th>
          <th scope="col">Cantante</th>
          <th scope="col">Genere</th>
          <th scope="col">Durata</th>
          <th scope="col">Esplora</th>
          <th scope="col">Modifica</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($albums as $album)
          <tr>
            <th scope="row">{{ $album->id }}</th>
            <td>{{ $album->name }}</td>
            <td>{{ $album->album_name }}</td>
            <td>{{ $album->author }}</td>          
            <td>{{ $album->type }}</td>
            <td>{{ $album->lenght }} min</td>
            <td><a class="text-warning" href="{{ route('albums.show', ['album' => $album]) }}">Dettaglio</a></td>
            <td><a href="{{ route('albums.edit', ['album' => $album]) }}">Modifica</a></td>   
          </tr>   
        @endforeach
      </tbody>
    </table>
      <div class="row">
        <div class="col-4 mt-2">
          <a type="button" class="btn btn-outline-light mb-3" href="{{ route('albums.create') }}">Aggiungi album</a>
        </div>
      </div>
  </div>
@endsection