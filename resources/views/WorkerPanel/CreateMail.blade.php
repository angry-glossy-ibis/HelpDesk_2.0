{{-- Это шаблон формы добавления товара в БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Create product --}}
@section('title', __('Написать письмо'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')
    {{
      Form::model($workers, [
          'method' => 'POST',
          'route'  => 'workers.createmail'
        ])
    }}

{{-- Включаем шаблон resources/views/WorkerPanel/partials/form3.blade.php --}}
@include('WorkerPanel/partials.form3')

    {{-- Кнопка предъявления формы --}}
    {{
        Form::submit(
            __('Отправить письмо'),
            [
                'class' => 'btn btn-success',
            ]
        )
    }}
    {{Form::close()}}
@endsection
