{{-- Это шаблон формы добавления товара в БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Create product --}}
@section('title', __('Заявка'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')
    @include('requests.partials.modal')
    {{-- Форма предъявляется методом HTTP POST на маршрут products.create --}}
    {{
        Form::model($requests, [
            'method' => 'POST',
            'route'  => 'requests.store'
        ])
    }}

    {{-- Включаем шаблон resources/views/requests/partials/form.blade.php --}}
    @include('requests.partials.form')

    {{-- Кнопка предъявления формы --}}
    {{
        Form::submit(
            __('Отправить заявку'),
            [
                'class' => 'btn btn-success',
            ]
        )
    }}

    {{ Form::close() }}
@endsection
