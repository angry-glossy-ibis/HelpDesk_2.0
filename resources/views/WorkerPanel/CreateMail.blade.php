{{-- Это шаблон формы добавления товара в БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Create product --}}
@section('title', __('Написать письмо'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4 mt-5">
  <h1>{{__('Написать письмо')}}</h1>
  </div>
  <div class="col-md-4">
  </div>
</div>

    {{  Form::model($workers, [
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
