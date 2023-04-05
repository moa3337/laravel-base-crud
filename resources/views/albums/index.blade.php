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
            
            <td>
              <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete-modal">
                Elimina
              </button>
            </td>   
            
          </tr>   
        @endforeach
      </tbody>
    </table>
    <div class="row">
      <div class="col-4 mt-2">
        <a type="button" class="btn btn-outline-light mb-3" href="{{ route('albums.create') }}">Aggiungi album</a>
      </div>
    </div>

    <div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Stai Eliminando Questo Elemento!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Sei sicuro di volerlo fare?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
            <form action="{{ route('albums.destroy', ['album' => $album]) }}" method="POST">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger">Elimina</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection