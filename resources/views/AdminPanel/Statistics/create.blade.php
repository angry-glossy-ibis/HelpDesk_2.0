{{-- Это шаблон формы добавления товара в БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')
<script defer src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
<script defer src="https://www.chartjs.org/samples/latest/utils.js"></script>
<script defer src="{{ asset('js/Report.js') }}"></script>
<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4 mt-5">
  <h1>{{__('Создать отчет')}}</h1>
  </div>
  <div class="col-md-4">
  </div>
</div>
{{-- Включаем шаблон resources/views/WorkerPanel/partials/form.blade.php --}}
@include('AdminPanel/Statistics/partials.form')
@endsection
