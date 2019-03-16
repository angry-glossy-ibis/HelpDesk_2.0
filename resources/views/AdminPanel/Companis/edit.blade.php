{{-- Это шаблон формы редактирования товара в БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Edit Company--}}
@section('title', __('Редактирование компании'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

{{-- Форма предъявляется методом HTTP PUT на веб­‑адрес: Company/id, где ID ⁠— первичный ключ товара --}}
{{
    Form::model($company1, [
        'method' => 'PUT',
        'route'  => [
            'AdminPanel/Companis/update',
            $company1->id,
        ]
    ])
}}
{{-- Включаем шаблон resources/views/AdminPanel/Companis/partials/form2.blade.php --}}
@include('AdminPanel/Companis/partials.form2')
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
