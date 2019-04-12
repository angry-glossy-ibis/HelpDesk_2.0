<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
              'regex:/^[\d а-яё!,.-]+$/iu', // Регулярное выражение: а-я, цифры, пробел
              'required',
          ],
          'surname' => [                  // Правила валидации для поля name
              'max:255',                // Длина не более 32 Б
              'min:1',                 // Длина не менее 1 Б
              'regex:/^[\d а-яё!,.-]+$/iu', // Регулярное выражение: а-я, цифры, пробел
              'required',             // Обязательное поле
          ],

          'phone' => [        // Правила валидации для поля phone
            'numeric',
            'required',       // Обязательное поле
          ],

          'email' => [                  // Правила валидации для поля name
              'max:255',                // Длина не более 32 Б
              'min:1',                 // Длина не менее 1 Б
              'regex:/([a-z\d_-]+@[.a-z\d_-]+)/u', // Регулярное выражение: а-я, цифры, пробел
              'required',             // Обязательное поле
          ],
          'password' => [                  // Правила валидации для поля name
              'max:255',                // Длина не более 32 Б
              'min:1',                 // Длина не менее 1 Б
              'regex:/^[\d а-яё!,.-]+$/iu',
              'required',
          ],
          'role_id' => [                  // Правила валидации для поля name
              'required',
              'numeric',              // Обязательное поле
          ],
          'position_id' => [                  // Правила валидации для поля name
              'required',
              'numeric',              // Обязательное поле
          ]
        ];
    }
}
