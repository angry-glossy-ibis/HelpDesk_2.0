{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

<style>
  .center {
    text-align: center;
  }
</style>
<div class = "center">
  <div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4 mt-5">
    <h1>{{__('Меню сотрудника')}}</h1>
    </div>
    <div class="col-md-4">
    </div>
  </div>

<div class="col">
<div class="container-fluid 3">

<div class="row-sm-10">
<div class="col-sm-0">
<div class="container-fluid 3">
</div>
</div>
<p><a style="font-size: 1.3em;" class="col-4 btn btn-success" href="{{ route("requests.index") }}">{{__('Список заявок')}}</a></p>
<p><a style="font-size: 1.3em;" class="col-4 btn btn-success" href="{{ route("requests.create") }}">{{__('Создать заявку')}}</a></p>
<p><a style="font-size: 1.3em;" class="col-4 btn btn-success" href="{{ route("WorkerPanel.parsing") }}">{{__('Почтовый ящик')}}</a></p>
<p><a style="font-size: 1.3em;" class="col-4 btn btn-success" href="{{ route("WorkerPanel.CreateMail") }}">{{__('Отправить письмо')}}</a></p>
<p><a style="font-size: 1.3em;" class="col-4 btn btn-success" href="{{ route("WorkerPanel.blackboard") }}">{{__('Agile-доска')}}</a></p>
</div>
</div>
</div>
<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; В будущем здесь будет подвал!</p>
</footer>
</div>
@endsection
