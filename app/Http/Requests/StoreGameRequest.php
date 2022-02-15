<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name_game'=>'required|string',
            'url_game'=>'required|url',
            'description'=>'nullable|string',
            'img_game'=>'required|mimes:jpeg,jpg,png|max:4000',
        ];
    }

    public function attributes()
    {
        return [
            'name_game'=>'Name game',
            'url_game'=>'URL game',
            'description'=>'Description',
            'img_game'=>'URL image of game',
        ];
    }
}
