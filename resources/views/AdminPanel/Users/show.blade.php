@extends('base')
@section('title', __('Просмотр пользователя'))
@section('main')
{{-- Включаем шаблон resources/views/AdminPanel/Users/partials/form.blade.php --}}
@include('AdminPanel/Users/partials.form')
@endsection
