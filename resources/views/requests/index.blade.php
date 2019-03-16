{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Products --}}
@section('title', __('Список заявок'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')
<script defer src="{{ asset('js/tablesort.min.js') }}"></script>
<script defer src="{{ asset('js/tablesort.number.js') }}"></script>
<script defer src="{{ asset('js/tablesort.date.js') }}"></script>
<script defer src="{{ asset('js/inittable.js') }}"></script>
<div class="col">
<div class="row">
<div class="container-fluid 3">
</div>
<p>
<a class="col btn btn-success" href="{{ route("WorkerPanel.index") }}">{{__('назад')}}</a>
</p>
<p>
<a class="col btn btn-success" href="{{ route("requests.create") }}">{{__('создать заявку')}}</a>
</p>
</div>
</div>
    <div class="table-responsive">
        <table id="table-id" class="table table-hover table-striped">
<thead>

            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Статус') }}</th>
                <th>{{ __('Компания') }}</th>
                <th>{{ __('Название') }}</th>
                <th>{{ __('Описание') }}</th>
                <th>{{ __('Комментарии') }}</th>
                <th>{{ __('Дата создания') }}</th>
                <th>{{ __('изменить') }}</th>
                <th>{{ __('удалить') }}</th>
                <th>{{ __('') }}</th>
            </tr>
          </thead>
            @foreach ($requests1 as $request1)
                <tr>
                  <td> <a class="btn btn-block btn-primary" href="{{ route("WorkerPanel.show", $request1->id)}}">{{__($request1->id)}}</a>
                  </td>
                    <td>{{ $request1->state->name }}</td>
                    <td>{{ $request1->client->company->CompName }}</td>
                    <td>{{ $request1->name }}</td>
                    <td>{{ $request1->summary }}</td>
                    <td>{{ $request1->comm }}</td>
                    <td>{{ $request1->created_at }}</td>
                    <td>  
                      <a class="btn btn-block btn-warning" href="{{ route("WorkerPanel.edit", $request1->id)}}">{{__('Изменить')}}</a>
                    </td>
                    <td> <a class="btn btn-block btn-danger" href="{{ route("WorkerPanel.remove", $request1->id)}}">{{__('X')}}</a>
                    </td>
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
@endsection
