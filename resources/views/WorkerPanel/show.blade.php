{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Products --}}
@section('title', __('Заявка'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

{{-- Включаем шаблон resources/views/WorkerPanel/partials/form.blade.php --}}
@include('WorkerPanel/partials.form')
@endsection
