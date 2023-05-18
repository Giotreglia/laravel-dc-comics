<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:255',
                'description' => 'required|max:65535',
                'thumb_src' => 'required|url|max:255',
                'price' => 'required|max:10',
                'series' => 'required|max:50',
                'type' => 'required|max:50',

            ],
            [
                'title.required' => 'Il titolo è obbligatorio',
                'title.max' => 'La lunghezza massima è di 255 caratteri',
                'description.required' => 'Il titolo è obbligatorio',
                'description.max' => 'La lunghezza massima è di 65535 caratteri',
                'thumb_src.required' => 'L\'URL è obbligatorio',
                'thumb_src.url' => 'Il valore inserito non è un URL valido. Inserire URL valido',
                'thumb_src.max' => 'La lunghezza massima è di 255 caratteri',
                'price.required' => 'Il prezzo è obbligatorio',
                'price.max' => 'La lunghezza massima è di 10 caratteri',
                'series.required' => 'La serie è obbligatoria',
                'series.max' => 'La lunghezza massima è di 50 caratteri',
                'type.required' => 'Il tipo è obbligatorio',
                'type.max' => 'La lunghezza massima è di 50 caratteri'
            ]);

        $form_data = $request->all();

        $newComic = new Comic();
        $newComic->fill($form_data);
        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id])->with('status', 'Fumetto aggiunto con successo!');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);

        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comic = Comic::findOrFail($id);

        $request->validate(
        [
            'title' => 'required|max:255',
            'description' => 'required|max:65535',
            'thumb_src' => 'required|url|max:255',
            'price' => 'required|max:10',
            'series' => 'required|max:50',
            'type' => 'required|max:50',

        ],
        [
            'title.required' => 'Il titolo è obbligatorio',
                'title.max' => 'La lunghezza massima è di 255 caratteri',
                'description.required' => 'Il titolo è obbligatorio',
                'description.max' => 'La lunghezza massima è di 65535 caratteri',
                'thumb_src.required' => 'L\'URL è obbligatorio',
                'thumb_src.url' => 'Il valore inserito non è un URL valido. Inserire URL valido',
                'thumb_src.max' => 'La lunghezza massima è di 255 caratteri',
                'price.required' => 'Il prezzo è obbligatorio',
                'price.max' => 'La lunghezza massima è di 10 caratteri',
                'series.required' => 'La serie è obbligatoria',
                'series.max' => 'La lunghezza massima è di 50 caratteri',
                'type.required' => 'Il tipo è obbligatorio',
                'type.max' => 'La lunghezza massima è di 50 caratteri'
        ]
        );

        $form_data = $request->all();
        $comic->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comic->id])->with('status', 'Fumetto aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
