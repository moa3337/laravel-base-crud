@extends('layouts.app')

@section('page-name', 'Lista albums')

@section('main-content')
    <div class="container mt-4">
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
                    <td><a href="{{ route('albums.show', ['album' => $album]) }}">Dettaglio</a></td>
                </tr>   
              @endforeach
          </tbody>
        </table>
    </div>
@endsection