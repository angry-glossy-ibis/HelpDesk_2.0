{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')
<style>
  .center {
    text-align: center;
  }
</style>
<div class = "center">
{{-- В секции title родительского шаблона будет выведен перевод фразы: Menu Admina --}}
@section('title', __('Меню администратора'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')
<div class="row">
<div class="col-sm-0">
<div class="container-fluid 1">
</div>
</div>
<a style="font-size: 1.25em;" class="col btn btn-success" href="{{ route("user.index") }}">{{__('Управление пользователями')}}</a>
<a style="font-size: 1.25em;" class="col btn btn-success" href="{{ route("req.index") }}">{{__('Просмотр заявок')}}</a>
<a style="font-size: 1.25em;" class="col btn btn-success" href="{{ route("companis.index") }}">{{__('Информация о компаниях')}}</a>
<a style="font-size: 1.25em;" class="col btn btn-success" href="{{ route("cliens.index") }}">{{__('Клиенты')}}</a>
</div>
</div>
@endsection
