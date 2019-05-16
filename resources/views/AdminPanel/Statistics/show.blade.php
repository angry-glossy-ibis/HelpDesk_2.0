@extends('base')
@section('title', __('Просмотр заявки'))
@section('main')
{{-- Включаем шаблон resources/views/AdminPanel/Request/partials/form.blade.php --}}
@include('AdminPanel/Request.partials.form')
@endsection
