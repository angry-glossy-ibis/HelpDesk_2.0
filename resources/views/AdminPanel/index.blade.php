{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4 mt-5">
  <h1>{{__('Меню администратора')}}</h1>
  </div>
  <div class="col-md-4">
  </div>
</div>
<style>
  .center {
    text-align: center;
  }
</style>
 <div class = "center">
   <div class="col">
    <div class="container-fluid 3">
      <div class="row-sm-10">
        <div class="col-sm-0">
          <div class="container-fluid 3">
          </div>
        </div>
        <p><a style="font-size: 1.25em;" class="col-4 btn btn-success" href="{{ route("user.index") }}">{{__('Управление пользователями')}}</a><p>
        <p><a style="font-size: 1.25em;" class="col-4 btn btn-success" href="{{ route("req.index") }}">{{__('Просмотр заявок')}}</a><p>
        <p><a style="font-size: 1.25em;" class="col-4 btn btn-success" href="{{ route("companies.index") }}">{{__('Информация о компаниях')}}</a><p>
        <p><a style="font-size: 1.25em;" class="col-4 btn btn-success" href="{{ route("cliens.index") }}">{{__('Клиенты')}}</a><p>
        <p><a style="font-size: 1.25em;" class="col-4 btn btn-success" href="{{ route("time.index") }}">{{__('Время выполнения заявок')}}</a><p>
        <p><a style="font-size: 1.25em;" class="col-4 btn btn-success" href="{{ route("statistics.create") }}">{{__('Создать отчет')}}</a><p>
      </div>
    </div>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; В будущем здесь будет подвал!</p>
  </footer>
</div>
@endsection
