@extends('base')
@section('title', __('Сведения о компании'))
@section('main')
{{-- Включаем шаблон resources/views/AdminPanel/Companies/partials/form.blade.php --}}
@include('AdminPanel/Companies/partials.form')
<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; В будущем здесь будет подвал!</p>
</footer>
@endsection
