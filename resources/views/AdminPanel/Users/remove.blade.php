{{-- Это шаблон формы удаления товара из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4 mt-5">
  <h1>{{__('Удаление пользователя')}}</h1>
  </div>
  <div class="col-md-4">
  </div>
</div>

<div class="row">
  <div class="col-sm-15">
    <div class="container-fluid 1">
      <a class="col btn btn-success" href="{{ route("AdminPanel/Users/index") }}">{{__('назад')}}</a>
    </div>
  </div>
</div>
{{
    Form::model($user1, [
        'method' => 'DELETE',
        'route'  => [
            'AdminPanel/Users/destroy',
            $user1->id,
        ]
    ])
}}

{{-- Выводим наименование товара --}}
{{ $user1->title }}

{{-- Кнопка предъявления формы --}}
{{
    Form::submit(
        __('Удалить пользователя'),
        [
            'class' => 'btn btn-success',
        ]
    )
}}

{{ Form::close() }}
@endsection
