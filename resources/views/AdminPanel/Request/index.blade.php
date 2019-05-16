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

<div class="row">
<div class="col-sm-15 mt-3 mb-3">
<div class="container-fluid">
  <a class="col btn btn-success" href="{{ route("AdminPanel.index") }}">{{__('назад')}}</a>
</div>
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
            <th>{{ __('Комментарий') }}</th>
            <th>{{ __('Created at') }}</th>
            <th>{{ __('Updated at') }}</th>
            <th>{{ __('Статус') }}</th>
        </tr>
        </thead>
        @foreach ($requests as $request1)
        <tr>
          <td>
            <a class="btn btn-block btn-primary" href="{{ route("AdminPanel/request/show", $request1->id)}}">{{__('Тех-')}}{{__($request1->id)}}</a>
            </td>
                <td>{{ $request1->name }}</td>
                <td>{{ $request1->client->company->CompName }}</td>
                <td>{{ $request1->summary }}</td>
                <td>{{ $request1->comm }}</td>
                <td>{{ $request1->created_at }}</td>
                <td>{{ $request1->updated_at }}</td>
                <td>{{ $request1->state->name }}</td>
            </tr>
        @endforeach
    </table>
</div>
{{$requests->links()}}
<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; В будущем здесь будет подвал!</p>
</footer>
@endsection
