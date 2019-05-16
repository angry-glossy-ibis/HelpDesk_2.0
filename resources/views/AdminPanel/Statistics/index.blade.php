{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4 mt-5">
  <h1>{{__('Предпросмотр отчета')}}</h1>
  </div>
  <div class="col-md-4">
  </div>
</div>

<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
<a class="col btn btn-success" href="{{ route("AdminPanel/Statistics/create") }}">{{__('назад')}}</a>
</div>
</div>
</div>


<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
<a class="col btn btn-success">{{__('выгрузить в pdf')}}</a>
<a class="col btn btn-success">{{__('распечатать')}}</a>
</div>
</div>
</div>
<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; В будущем здесь будет подвал!</p>
</footer>
@endsection
