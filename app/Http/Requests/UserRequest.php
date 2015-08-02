<?php namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;

class UserRequest extends Request {

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
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::user()->id,
            'user_name' => 'required|user_name|min:3|max:50|unique:users,user_name,' . Auth::user()->id,
            'password' => 'required|confirmed|min:6',
        ];
    }

}