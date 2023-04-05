<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('albums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:albums|max:20',
            'album_name' => 'required|string|unique:albums|max:15',
            'author' => 'required|string|max:20',
            'editor' => 'required|string|nullable:albums|max:20',
            'lenght' => 'required|integer',
            'poster' => 'required|string',
            'type' => 'required|string|in:pop,rock,jazz,rap',
            'description' => 'nullable|string',
        ], [
            'name.required' => 'il nome è obbligatorio',
            'name.string' => 'il nome deve essere una stringa',
            'name.max' => 'il nome deve massimo di 20 caratteri',
            'name.unique' => 'il nome deve essere unico',

            'album_name.required' => 'il nome dell\'album è obbligatorio',
            'album_name.string' => 'il nome dell\'album deve essere una stringa',
            'album_name.max' => 'il nome dell\'album deve massimo di 15 caratteri',
            'album_name.unique' => 'il nome dell\'album deve essere unico',

            'author.required' => 'l\'autore è obbligatorio',
            'author.string' => 'l\'autore deve essere una stringa',
            'author.max' => 'l\'autore deve massimo di 20 caratteri',

            'lenght.required' => 'la durata è obbligatoria',
            'lenght.string' => 'la durata deve essere un numero',

            'poster.required' => 'l\'immagine deve essere una stringa',

            'type.required' => 'il tipo è obbligatorio',
            'type.string' => 'il tipo deve essere una stringa',
            'type.max' => 'il tipo deve un uno tra i seguenti valari: "pop", "rock", "jazz", "rap"',

            'description.required' => 'la descrizione deve essere una stringa',
        ]);

        $data = $request->all();

        $album = new Album;
        //$album->fill($data);
        $album->name = $data["name"];
        $album->album_name = $data["album_name"];
        $album->author = $data["author"];
        $album->editor = $data["editor"];
        $album->lenght = $data["lenght"];
        $album->poster = $data["poster"];
        $album->type = $data["type"];
        $album->description = $data["description"];
        $album->save();

        return redirect()->route('albums.show', $album);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('albums.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view('albums.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $request->validate([
            'name' => 'required|string|unique:albums|max:20',
            'album_name' => 'required|string|unique:albums|max:15',
            'author' => 'required|string|max:20',
            'editor' => 'required|string|nullable:albums|max:20',
            'lenght' => 'required|integer',
            'poster' => 'required|string',
            'type' => 'required|string|in:pop,rock,jazz,rap',
            'description' => 'nullable|string',
        ], [
            'name.required' => 'il nome è obbligatorio',
            'name.string' => 'il nome deve essere una stringa',
            'name.max' => 'il nome deve massimo di 20 caratteri',
            'name.unique' => 'il nome deve essere unico',

            'album_name.required' => 'il nome dell\'album è obbligatorio',
            'album_name.string' => 'il nome dell\'album deve essere una stringa',
            'album_name.max' => 'il nome dell\'album deve massimo di 15 caratteri',
            'album_name.unique' => 'il nome dell\'album deve essere unico',

            'author.required' => 'l\'autore è obbligatorio',
            'author.string' => 'l\'autore deve essere una stringa',
            'author.max' => 'l\'autore deve massimo di 20 caratteri',

            'lenght.required' => 'la durata è obbligatoria',
            'lenght.string' => 'la durata deve essere un numero',

            'poster.required' => 'l\'immagine deve essere una stringa',

            'type.required' => 'il tipo è obbligatorio',
            'type.string' => 'il tipo deve essere una stringa',
            'type.max' => 'il tipo deve un uno tra i seguenti valari: "pop", "rock", "jazz", "rap"',

            'description.required' => 'la descrizione deve essere una stringa',
        ]);

        $data = $request->all();
        $album->update($data);
        return redirect()->route('albums.show', $album);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();
        return redirect()->route('albums.index');
    }
}
