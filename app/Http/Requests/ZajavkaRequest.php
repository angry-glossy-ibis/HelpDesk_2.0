<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ZajavkaRequest extends FormRequest
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
          'name' => [                  // Правила валидации для поля name
              'max:255',                // Длина не более 32 Б
              'min:1',                 // Длина не менее 1 Б
              'regex:/^[\da-z а-яё!,.-]+$/iu', // Регулярное выражение: а-я, цифры, пробел
              'required',              // Обязательное поле
              //'unique:products',          // Не допускать повторов в таблице rooms
            ],
            'summary' => [                  // Правила валидации для поля name
                'max:255',                // Длина не более 32 Б
                'min:1',                 // Длина не менее 1 Б
                'regex:/^[\da-z а-яё!,.-]+$/iu', // Регулярное выражение: а-я, цифры, пробел
                'required',              // Обязательное поле
                //'unique:products',          // Не допускать повторов в таблице rooms
              ],
              'comm' => [                  // Правила валидации для поля name
                  'max:255',                // Длина не более 32 Б
                  'min:1',                 // Длина не менее 1 Б
                  'regex:/^[\da-z а-яё!,.-]+$/iu', // Регулярное выражение: а-я, цифры, пробел
                  'required',              // Обязательное поле
                  //'unique:products',          // Не допускать повторов в таблице rooms
                ]
        ];
    }
}
