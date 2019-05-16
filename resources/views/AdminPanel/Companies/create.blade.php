{{-- Это шаблон формы добавления товара в БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Create --}}
@section('title', __('Добавление компании'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

{{-- Форма предъявляется методом HTTP POST на маршрут products.create --}}
{{
    Form::model($compan, [
        'method' => 'POST',
        'route'  => 'companies.store'
    ])
}}
<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
  <p><a class="col btn btn-success" href="{{ route("AdminPanel/Companies/index") }}">{{__('назад для администратора')}}</a></p>
  <p><a class="col btn btn-success" href="{{ route("requests.create") }}">{{__('назад для сотрудника')}}</a></p>
</div>
</div>
</div>

<div class="row">
<div class="col-md-4">
  <div class="form-group">
      {{ Form::label('CompName', __('Название компании')) }}
      {{ Form::text('CompName', null, ['class' => 'form-control']) }}
  </div>
  <div class="form-group">
      {{ Form::label('CompMail', __('Корпоративная почта')) }}
      {{ Form::text('CompMail', null, ['class' => 'form-control']) }}
  </div>
  <div class="form-group">
      {{ Form::label('CompPhone', __('телефон')) }}
      {{ Form::text('CompPhone', null, ['class' => 'form-control']) }}
  </div>
</div>
</div>
<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
  {{-- Кнопка предъявления формы --}}
  {{
      Form::submit(
          __('Добавить компанию'),
          [
              'class' => 'btn btn-block btn-success',
          ]
      )
  }}

  {{ Form::close() }}
</div>
</div>
</div>
@endsection
