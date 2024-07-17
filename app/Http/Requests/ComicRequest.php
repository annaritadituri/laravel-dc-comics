<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'min:10|required|string',
            'description' => 'string|nullable',
            'thumb' => 'url|required',
            'price' => 'decimal:0,2|min:0',
            'series' => 'string|nullable',
            'sale_date' => 'date_format: YYYY-MM-DD',
            'type' => 'string|nullable',
            'artists' => 'string|nullable',
            'writers' => 'string|nullable'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere una lunghezza minima di 10 caratteri',
            'thumb.required' => "Il link dell'immagine è obbligatorio",
            'thumb.url' => "L'immagine deve avere un URL corretto",
            'price.decimal' => 'Il prezzo deve essere un valore numerico con massimo due cifre dopo la virgola',
            'price.min' => 'Il prezzo deve essere un valore positivo',
            'sale_date' => 'La data deve essere in formato YYYY-MM-DD',
        ];
    }
}
