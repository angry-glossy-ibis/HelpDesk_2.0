{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')
<script defer src="{{ asset('js/tablesort.min.js') }}"></script>
<script defer src="{{ asset('js/tablesort.number.js') }}"></script>
<script defer src="{{ asset('js/tablesort.date.js') }}"></script>
<script defer src="{{ asset('js/inittable.js') }}"></script>

<div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4 mt-5">
  <h1>{{__('Список заявок')}}</h1>
  </div>
  <div class="col-md-4">
  </div>
</div>

<div class="col">
<div class="row">
<div class="container-fluid 3">
</div>
<p>
<a class="col btn btn-success" href="{{ route("WorkerPanel.index") }}">{{__('назад')}}</a>
</p>
<hr>
<p>
<a class="col btn btn-primary" href="{{ route("requests.create") }}">{{__('создать заявку')}}</a>
</p>
</div>
</div>
    <div class="table-responsive">
        <table id="table-id" class="table table-hover">
          <thead>
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Название') }}</th>
                <th>{{ __('Компания') }}</th>
                <th>{{ __('Описание') }}</th>
                <th>{{ __('Комментарии') }}</th>
                <th>{{ __('Дата создания') }}</th>
                <th>{{ __('изменить') }}</th>
                <th>{{ __('удалить') }}</th>
                <th>{{ __('Статус') }}</th>
                <th>{{ __('') }}</th>
            </tr>
          </thead>
            @foreach ($requests1 as $request1)
                <tr class="@if ($request1->state_id == 1)
                  warning-opacity-50
                  @elseif ($request1->state_id == 2)
                  bg-success-50
                  @endif" >
                    <td>
                      <a class="btn btn-block btn-primary" href="{{ route("WorkerPanel.show", $request1->id)}}">{{__('Тех-')}}{{__($request1->id)}}</a>
                    </td>
                    <td>{{ $request1->name }}</td>
                    <td>{{ $request1->client->company->CompName }}</td>
                    <td>{{ $request1->summary }}</td>
                    <td>{{ $request1->comm }}</td>
                    <td>{{ $request1->created_at }}</td>
                    <td>
                      <a class="btn btn-block btn-warning" href="{{ route("WorkerPanel.edit", $request1->id)}}">{{__('Изменить')}}</a>
                    </td>
                    <td>
                      <a class="btn btn-block btn-danger" href="{{ route("WorkerPanel.remove", $request1->id)}}">{{__('X')}}</a>
                    </td>
                    <td>{{ $request1->state->name }}</td>
                    <td>{{
                          Form::model($request1, [
                              'method' => 'PUT',
                              'route'  => [
                                  'requests.update',
                                  $request1->id,
                              ]
                          ])}}
                      {{Form::submit(__('Завершить'),
                              [
                                  'class' => 'btn btn-block btn-success',
                              ])}}
                            {{Form::close()}}</td>
                 </tr>
            @endforeach
        </table>
    </div>
    {{$requests1->links()}}
    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; В будущем здесь будет подвал!</p>
    </footer>
@endsection
