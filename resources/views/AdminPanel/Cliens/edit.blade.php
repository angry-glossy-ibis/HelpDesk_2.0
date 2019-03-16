{{-- Это шаблон формы редактирования товара в БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Edit client --}}
@section('title', __('Редактирование клиента'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')
{{-- Форма предъявляется методом HTTP PUT на веб­‑адрес: products/ID, где ID ⁠— первичный ключ товара --}}
{{
    Form::model($cliens1, [
        'method' => 'PUT',
        'route'  => [
            'AdminPanel/Cliens/update',
            $cliens1->id,
        ]
    ])
}}
{{-- Включаем шаблон resources/views/AdminPanel/Cliens/partials/form2.blade.php --}}
@include('AdminPanel/Cliens/partials.form2')
{{-- Кнопка предъявления формы --}}
{{
    Form::submit(
        __('Сохранить изменения'),
        [
            'class' => 'btn btn-success',
        ]
    )
}}
{{Form::close()}}
@endsection
