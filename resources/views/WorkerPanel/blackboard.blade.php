{{-- Это шаблон формы добавления товара в БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Create product --}}
@section('title', __('Панель заявок'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

<link rel="stylesheet" href="http://www.riccardotartaglia.it/jkanban/dist/jkanban.min.css">
<link rel="stylesheet" href="http://www.riccardotartaglia.it/jkanban/css/app.css">
<div class="row">
<div class="col-sm-0">
<div class="container-fluid 1">
<p><a style="font-size: 1.1em;" class="col btn btn-success" href="{{ route("WorkerPanel.index") }}">{{__('назад')}}</a></p>
<p><a style="font-size: 1.1em;" class="col btn btn-success" href="{{ route("requests.create") }}">{{__('Создать заявку')}}</a></p>
</div>
</div>
</div>

<div class="row m-b-30">
        <div class="col">
            <p><a style="font-size: 1.3em;">Статусы заявок</a></p>
            <hr>
            <div id="Пробник"></div>
        </div>
</div>

<script defer src="{{ asset('js/jkanban.js') }}"></script>
<script defer src="{{ asset('js/jkanban.min.js')}}"></script>
<script defer src="{{ asset('js/init.js')}}"></script>
@endsection
