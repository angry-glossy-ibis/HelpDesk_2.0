{{-- Это шаблон формы редактирования товара в БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Edit client --}}
@section('title', __('Просмотр клиента'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

{{-- Включаем шаблон resources/views/AdminPanel/Cliens/partials/form.blade.php --}}
@include('AdminPanel/Cliens/partials.form')
@endsection
