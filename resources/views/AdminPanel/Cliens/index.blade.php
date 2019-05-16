{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Clients --}}
@section('title', __('Клиенты'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')
<script defer src="{{ asset('js/tablesort.min.js') }}"></script>
<script defer src="{{ asset('js/tablesort.number.js') }}"></script>
<script defer src="{{ asset('js/tablesort.date.js') }}"></script>
<script defer src="{{ asset('js/inittable.js') }}"></script>
<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
  <a class="col btn btn-success" href="{{ route("AdminPanel.index") }}">{{__('назад')}}</a>
</div>
</div>
</div>
<div class="table-responsive">
    <table id="table-id" class="table table-hover">
      <thead>
        <tr>
            <th>{{ __('Id') }}</th>
            <th>{{ __('Фамилия') }}</th>
            <th>{{ __('Имя') }}</th>
            <th>{{ __('Отчество') }}</th>
            <th>{{ __('Почта') }}</th>
            <th>{{ __('телефон') }}</th>
            <th>{{ __('Компания') }}</th>
            <th>{{ __('изменить') }}</th>
            <th>{{ __('удалить') }}</th>
        </tr>
        </thead>
        @foreach ($clien as $cliens1)
            <tr>
                <td>
                  <a class="btn btn-block btn-primary" href="{{ route("AdminPanel/Cliens/show", $cliens1->id)}}">{{__($cliens1->id)}}</a>
                </td>
                <td>{{ $cliens1->ClientSurname }}</td>
                <td>{{ $cliens1->ClientName }}</td>
                <td>{{ $cliens1->ClientPatronymic }}</td>
                <td>{{ $cliens1->ClientMail }}</td>
                <td>{{ $cliens1->ClientPhone }}</td>
                <td>{{ $cliens1->company->CompName }}</td>
                <td>
                  <a class="btn btn-block btn-warning" href="{{ route("AdminPanel/Cliens/edit", $cliens1->id)}}">{{__('Редактировать')}}</a>
                </td>
                <td>
                   <a class="btn btn-block btn-danger" href="{{ route("AdminPanel/Cliens/remove", $cliens1->id)}}">{{__('X')}}</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
{{$clien->links()}}
<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; В будущем здесь будет подвал!</p>
</footer>
@endsection
