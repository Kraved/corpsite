<?php

namespace App\Http\Requests\Management;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class BirthDayRequest extends FormRequest
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
            'text' => 'required|string|max:10000',
        ];
    }

    public function messages()
    {
        return [
            'text.required' => 'Поле Текст обязательно для заполнения!',
            'text.string' => 'Поле Текст должно иметь тип string!',
            'text.max' => 'Поле Текст поддерживает максимум 10000 символов!',
        ];
    }
}
