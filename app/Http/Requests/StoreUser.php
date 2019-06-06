<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name' => 'required|min:2|max:25',
            'email' => 'required|email|unique:users|max:50',
            'password' => 'required|min:7|confirmed',
        ];
    }

    public function messages(){
        return[
        'name.required'=> "Veuillez choisir un nom",
        'name.min'=> "Votre nom doit comporter au moins 2 caractères",
        'name.max'=> "Votre nom doit comporter moins de 25 caractères",
        'email.required'=> "Veuillez entrer votre e-mail",
        'email.max'=> "Votre email doit comporter moins de 50 caractères",
        'email.unique'=> "Cet e-mail est déjà lié à un compte",
        'password.required'=> "Veuillez inscrire votre mot de passe",
        'password.confirmed'=> "Le mot de passe et la validation ne correspondent pas",
        'password.min'=> "Votre mot de passe doit comporter au moins 7 caractères",
        ];
    }
}
