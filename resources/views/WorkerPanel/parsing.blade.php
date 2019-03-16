{{-- Это шаблон формы добавления товара в БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Parsing email --}}
@section('title', __('Парсинг почты'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')
<div class="row">
  <div class="col-sm-15">
   <div class="container-fluid 1">
    <p> <a class="col btn btn-success" href="{{ route("WorkerPanel.index") }}">{{__('назад')}}</a> </p>
    <p> <a class="col btn btn-success" href="{{ route("WorkerPanel.CreateMail") }}">{{__('отправить письмо')}}</a> </p>
   </div>
  </div>
</div>

<div class="table-responsive">
    <table class="table table-hover table-striped">
        <tr>
            <th>{{ __('Название') }}</th>
            <th>{{ __('Содержание') }}</th>
            <th>{{ __('Отправитель') }}</th>
            <th>{{ __('Дата создания') }}</th>
        </tr>

        @foreach ($messages[1] as $message_list)
        <tr>
        <th>{{ $message_list->getSubject() }}</th>
        <th><div style="height: 200px; width:300px; overflow: auto">{!! $message_list->getHTMLBody() !!}</div></th>
        <th>{{$message_list->getFrom()[0]->mail}}</th>
        <th>{{$message_list->getDate() }}</th>
      </tr>
        @endforeach
    </table>
</div>
@endsection
