<?php

namespace App\Http\Requests\Management;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class LinksRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name' => 'required|string|max:100',
            'url' => 'required|string|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле Имя ссылки обязательно для заполнения!',
            'name.string' => 'Поле Имя ссылки должно иметь тип string!',
            'name.max' => 'Поле Имя ссылки поддерживает максимум 100 символов!',
            'url.max' => 'Поле URL поддерживает максимум 1000 символов!',
            'url.string' => 'Поле URL должно иметь тип string!',
            'url.required' => 'Поле URL обязательно для заполнения!',
        ];
    }
}
