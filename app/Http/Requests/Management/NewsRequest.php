<?php

namespace App\Http\Requests\Management;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class NewsRequest extends FormRequest
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
            'title' => 'required|string|max:150',
            'text' => 'required|string|max:5000',
            'published' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле Заголовок обязательно для заполнения!',
            'title.string' => 'Поле Заголовок должно иметь тип string!',
            'title.max' => 'Поле Заголовок поддерживает максимум 150 символов!',
            'text.required' => 'Поле Текст обязательно для заполнения!',
            'text.string' => 'Поле Публикация должно иметь тип string!',
            'text.max' => 'Поле Текст поддерживает максимум 5000 символов!',
            'published.required' => 'Поле Публикация обязательно для заполнения!',
            'published.integer' => 'Поле Публикация должно иметь тип integer',
        ];
    }
}
