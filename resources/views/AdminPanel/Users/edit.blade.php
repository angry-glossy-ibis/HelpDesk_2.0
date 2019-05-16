{{-- Это шаблон формы редактирования товара в БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4 mt-5">
  <h1>{{__('Редактирование пользователя')}}</h1>
  </div>
  <div class="col-md-4">
  </div>
</div>

{{-- Форма предъявляется методом HTTP PUT на веб­‑адрес: users/id, где ID ⁠— первичный ключ товара --}}
{{
    Form::model($user1, [
        'method' => 'PUT',
        'route'  => [
            'AdminPanel/Users/update',
            $user1->id,
        ]
    ])
}}
{{-- Включаем шаблон resources/views/AdminPanel/Users/partials/form2.blade.php --}}
@include('AdminPanel/Users/partials.form2')
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
