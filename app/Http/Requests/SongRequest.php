<?php namespace App\Http\Requests;

class SongRequest extends Request {

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
            'song' => 'required',
            'added' => 'required',
            'cost' => 'required',
            'system' => 'required',

            // Foreign Keys
            'type_id' => 'required',
            'genre_id' => 'required'
        ];
    }

}