{{-- Это шаблон формы редактирования товара в БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Edit product --}}
@section('title', __('Изменение заявки'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

{{-- Форма предъявляется методом HTTP PUT на веб­‑адрес: products/ID, где ID ⁠— первичный ключ товара --}}
{{
    Form::model($request1, [
        'method' => 'PUT',
        'route'  => [
            'WorkerPanel.update',
            $request1->id,
        ]
    ])
}}
{{-- Включаем шаблон resources/views/WorkerPanel/partials/form2.blade.php --}}
@include('WorkerPanel/partials.form2')
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

{{
    Form::model($request1, [
        'method' => 'PUT',
        'route'  => [
            'WorkerPanel.decrating',
            $request1->id,
        ]
    ])
}}
{{
    Form::submit(
        __('Отнять 2'),
        [
            'class' => 'btn btn-danger',
        ]
    )
}}
{{Form::close()}}

{{
    Form::model($request1, [
        'method' => 'PUT',
        'route'  => [
            'WorkerPanel.incrating',
            $request1->id,
        ]
    ])
}}
{{
    Form::submit(
        __('Прибавить 1'),
        [
            'class' => 'btn btn-primary',
        ]
    )
}}
{{Form::close()}}

@endsection
