<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmailRequest extends FormRequest
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
            'email' => 'required|email:rfc,dns|unique:emails',
            'category_id' => 'nullable|numeric',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Полето емаил е задолжително!',
            'email.email' => 'Емаилот треба да биде валидна емаил адреса!',
            'email.unique' => 'Веќе сте регистрирани!',
        ];
    }
}
