@extends('layouts.app')

@section('page-name', 'Modifica Album' . $album->name)

@section('main-content')

    <div class="container">
        <h2 class="text-light my-3">Stai modificando {{ $album->name }}</h2>
        <form action="{{ route('albums.update', $album) }}" method="POST" class="row">
         @csrf 
         @method('PUT')  
            
            <div class="col-6 text-light">
                <label for="name" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') ?? $album->name }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-6 text-light">
                <label for="author" class="form-label">Autore</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{ old('author') ?? $album->author }}">
                @error('author')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-4 text-light">
                <label for="album_name" class="form-label">Nome Album</label>
                <input type="text" class="form-control @error('album_name') is-invalid @enderror" id="album_name" name="album_name" value="{{ old('album_name') ?? $album->album_name }}">
                @error('album_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-4 text-light">
                <label for="editor" class="form-label">Casa Discografica</label>
                <input type="text" class="form-control @error('editor') is-invalid @enderror" id="editor" name="editor" value="{{ old('editor') ?? $album->editor }}">
                @error('editor')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-4 text-light">
                <label for="type" class="form-label">Genere</label>
                <select class="form-select @error('type') is-invalid @enderror" id="type" name="type">
                    <option value="pop" @if(old('type') ?? $album->type == 'pop') selected @endif>pop</option>
                    <option value="rock" @if(old('type') ?? $album->type == 'rock') selected @endif>rock</option>
                    <option value="jazz" @if(old('type') ?? $album->type == 'jazz') selected @endif>jazz</option>
                    <option value="rap" @if(old('type') ?? $album->type == 'rap') selected @endif>rap</option>
                </select>
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-4 text-light">
                <label for="lenght" class="form-label">Durata</label>
                <input type="text" class="form-control @error('lenght') is-invalid @enderror" id="lenght" name="lenght" value="{{ old('lenght') ?? $album->lenght }}">
                @error('lenght')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-4 text-light">
                <label for="poster" class="form-label">Copertina</label>
                <input type="text" class="form-control @error('poster') is-invalid @enderror" id="poster" name="poster" value="{{ old('poster') ?? $album->poster }}">
                @error('poster')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-4 text-light">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="3">
                    {{ old('description') ?? $album->description }}
                </textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-outline-primary">Salva</button>
            </div>
        </form>
    </div>
@endsection