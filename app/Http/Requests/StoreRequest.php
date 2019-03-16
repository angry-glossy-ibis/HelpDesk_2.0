<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
          'ClientSurname' => [                  // Правила валидации для поля name
              'max:255',                // Длина не более 32 Б
              'min:1',                 // Длина не менее 1 Б
              'regex:/^[\d а-яё!,.-]+$/iu', // Регулярное выражение: а-я, цифры, пробел
              'required',              // Обязательное поле
              //'unique:products',          // Не допускать повторов в таблице rooms
          ],
          'ClientName' => [                  // Правила валидации для поля name
              'max:255',                // Длина не более 32 Б
              'min:1',                 // Длина не менее 1 Б
              'regex:/^[\d а-яё!,.-]+$/iu', // Регулярное выражение: а-я, цифры, пробел
              'required',              // Обязательное поле
              //'unique:products',          // Не допускать повторов в таблице rooms
          ],
          'ClientPatronymic' => [                  // Правила валидации для поля name
              'max:255',                // Длина не более 32 Б
              'min:1',                 // Длина не менее 1 Б
              'regex:/^[\d а-яё!,.-]+$/iu', // Регулярное выражение: а-я, цифры, пробел
              'required',              // Обязательное поле
              //'unique:products',          // Не допускать повторов в таблице rooms
          ],
          'ClientPhone' => [                  // Правила валидации для поля name
              'numeric',
              'required',              // Обязательное поле
          ],
          'company_id' => [                  // Правила валидации для поля name
              'required',
              'numeric',              // Обязательное поле
          ],
          'name' => [                  // Правила валидации для поля name
              'required',
              'max:255',                // Длина не более 32 Б
              'min:1',
          ],
          'summary' => [                  // Правила валидации для поля name
              'required',
              'max:255',                // Длина не более 32 Б
              'min:1',   
          ],
        ];
    }
}
