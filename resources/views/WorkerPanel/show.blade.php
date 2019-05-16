{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4 mt-5">
  <h1>{{__('Заявка')}}</h1>
  </div>
  <div class="col-md-4">
  </div>
</div>
{{-- Включаем шаблон resources/views/WorkerPanel/partials/form.blade.php --}}
@include('WorkerPanel/partials.form')
@endsection
