@extends('base')
@section('title', __('Сведения о компании'))
@section('main')
{{-- Включаем шаблон resources/views/AdminPanel/Companis/partials/form.blade.php --}}
@include('AdminPanel/Companis/partials.form')
@endsection
