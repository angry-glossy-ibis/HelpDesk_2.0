{{-- Это шаблон формы удаления товара из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Delete cliens --}}
@section('title', __('Удаление клиента'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

<div class="row">
  <div class="col-sm-15">
    <div class="container-fluid 1">
      <a class="col btn btn-success" href="{{ route("AdminPanel/Cliens/index") }}">{{__('назад')}}</a>
    </div>
  </div>
</div>
{{
    Form::model($cliens1, [
        'method' => 'DELETE',
        'route'  => [
            'AdminPanel/Users/destroy',
            $cliens1->id,
        ]
    ])
}}

{{-- Выводим наименование товара --}}
{{ $cliens1->title }}

{{-- Кнопка предъявления формы --}}
{{
    Form::submit(
        __('Удалить клиента'),
        [
            'class' => 'btn btn-success',
        ]
    )
}}

{{ Form::close() }}
@endsection
