{{-- Это шаблон формы удаления товара из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4 mt-5">
  <h1>{{__('Удаление заявки')}}</h1>
  </div>
  <div class="col-md-4">
  </div>
</div>

<div class="row">
  <div class="col-sm-15">
    <div class="container-fluid 1">
    <p>  <a class="col btn btn-success" href="{{ route("requests.index") }}">{{__('назад')}}</a> </p>
<div class="form-group">
    <p>  {{ Form::label('name', $request1->problem->name, ['class' => 'form-control', 'disabled']) }} </p>
  </div>
    </div>
  </div>
</div>

{{
    Form::model($request1, [
        'method' => 'DELETE',
        'route'  => [
            'WorkerPanel/destroy',
            $request1->id,
        ]
    ])
}}
{{-- Кнопка предъявления формы --}}
{{
    Form::submit(
        __('Удалить заявку'),
        [
            'class' => 'btn btn-success',
        ]
    )
}}

@endsection
