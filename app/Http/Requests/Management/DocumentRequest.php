<?php

namespace App\Http\Requests\Management;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class DocumentRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'type' => 'required',
            'file' => 'required|max:20480',
        ];
    }

    public function messages()
    {
        $maxFileSize = ini_get('upload_max_filesize');
        return [
            'name.required' => 'Поле Имя файла обязательно для заполнения!',
            'name.string' => 'Поле Имя файла должно иметь тип string!',
            'name.max' => 'Поле Имя файла поддерживает максимум 100 символов!',
            'type.required' => 'Поле Тип документа обязательно для заполнения!',
            'file.max' => "Максимальный размер файла $maxFileSize!",
            'file.required' => 'Укажите загружаемый файл!',
        ];
    }
}
