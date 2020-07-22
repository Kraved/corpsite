<?php

namespace App\Http\Requests\Management;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AddressBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'company' => 'required|string|max:100',
            'full_name' => 'required|string|max:100',
            'number' => 'required',
            'add_number' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'company.required' => 'Поле Компания обязательно для заполнения!',
            'company.string' => 'Поле Компания должно иметь тип string!',
            'company.max' => 'Поле Компания поддерживает максимум 100 символов!',
            'full_name.required' => 'Поле ФИО обязательно для заполнения!',
            'full_name.string' => 'Поле ФИО должно иметь тип string!',
            'full_name.max' => 'Поле ФИО поддерживает максимум 100 символов!',
            'number.required' => 'Поле Номер телефона обязательно для заполнения!',
            'add_number.required' => 'Поле Дополнительный номер телефона должно иметь тип integer',
    ];
    }
}
