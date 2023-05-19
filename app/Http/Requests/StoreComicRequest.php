<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

                'title' => 'required|max:255',
                'description' => 'required|max:65535',
                'thumb_src' => 'required|url|max:255',
                'price' => 'required|max:10',
                'series' => 'required|max:50',
                'sale_date' => 'nullable',
                'type' => 'required|max:50',

        ];
    }

    public function messages()
    {
        return [

                'title.required' => 'Il titolo è obbligatorio',
                'title.max' => 'La lunghezza massima è di 255 caratteri',
                'description.required' => 'La descrizione è obbligatoria',
                'description.max' => 'La lunghezza massima è di 65535 caratteri',
                'thumb_src.required' => 'L\'URL dell\'immagine è obbligatoria',
                'thumb_src.url' => 'Il valore inserito non è un URL valida. Inserire URL valida, es. https://ilmiosito.com',
                'thumb_src.max' => 'La lunghezza massima è di 255 caratteri',
                'price.required' => 'Il prezzo è obbligatorio',
                'price.max' => 'La lunghezza massima è di 10 caratteri',
                'series.required' => 'La serie è obbligatoria',
                'series.max' => 'La lunghezza massima è di 50 caratteri',
                'type.required' => 'Il tipo è obbligatorio',
                'type.max' => 'La lunghezza massima è di 50 caratteri'

        ];
    }
}
