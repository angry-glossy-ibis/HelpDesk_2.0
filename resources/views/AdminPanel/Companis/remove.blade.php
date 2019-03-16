{{-- Это шаблон формы удаления товара из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Delete company --}}
@section('title', __('Удаление компании'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

<div class="row">
  <div class="col-sm-15">
    <div class="container-fluid 1">
      <a class="col btn btn-success" href="{{ route("AdminPanel/Companis/index") }}">{{__('назад')}}</a>
    </div>
  </div>
</div>

{{-- Кнопка предъявления формы --}}
{{
    Form::submit(
        __('Удалить компанию'),
        [
            'class' => 'btn btn-success',
        ]
    )
}}
@endsection
