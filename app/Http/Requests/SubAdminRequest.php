<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubAdminRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            "name" => "required",
            "surname" => "required",
            "username" => "required",
            "email" => "required|email",
            "phone" => "required|min:10|max:12",
            "password" => "required|same:password_confirm",
            "password_confirm" => "required",
        ];
    }

    public function attributes()
    {
        return [
            "name" => "İsim",
            "surname" => "Soyisim",
            "username" => "Kullanıcı adı",
            "email" => "Email",
            "phone" => "Telefon",
            "password" => "Şifre",
            "password_confirm" => "Şifre tekrar",
        ];
    }
}
