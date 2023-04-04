@extends('layouts.app')

@section('page-name', 'Nuovo Album')

@section('main-content')

    <div class="container">
        <form action="{{ route('albums.store')}}" method="POST" class="row">
         @csrf   
            
            <div class="col-6 text-light">
                <label for="name" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="col-6 text-light">
                <label for="author" class="form-label">Autore</label>
                <input type="text" class="form-control" id="author" name="author">
            </div>
            <div class="col-4 text-light">
                <label for="album_name" class="form-label">Nome Album</label>
                <input type="text" class="form-control" id="album_name" name="album_name">
            </div>
            <div class="col-4 text-light">
                <label for="editor" class="form-label">Casa Discografica</label>
                <input type="text" class="form-control" id="editor" name="editor">
            </div>
            <div class="col-4 text-light">
                <label for="type" class="form-label">Genere</label>
                <select class="form-select" id="type" name="type">
                    <option value="pop">pop</option>
                    <option value="rock">rock</option>
                    <option value="jazz">jazz</option>
                    <option value="rap">rap</option>
                </select>
            </div>
            <div class="col-4 text-light">
                <label for="lenght" class="form-label">Durata</label>
                <input type="text" class="form-control" id="lenght" name="lenght">
            </div>
            <div class="col-4 text-light">
                <label for="poster" class="form-label">Copertina</label>
                <input type="text" class="form-control" id="poster" name="poster">
            </div>
            <div class="col-4 text-light">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">
                </textarea>
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-outline-primary">Salva</button>
            </div>
        </form>
    </div>
@endsection
