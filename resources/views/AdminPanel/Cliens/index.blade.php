{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Clients --}}
@section('title', __('Клиенты'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')
<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
  <a class="col btn btn-success" href="{{ route("AdminPanel.index") }}">{{__('назад')}}</a>
</div>
</div>
</div>
<div class="table-responsive">
    <table class="table table-hover table-striped">
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
        @foreach ($clien as $cliens1)
            <tr>
                <td>{{ Html::secureLink(route('AdminPanel/Cliens/show', $cliens1->id), $cliens1->id) }}</td>
                <td>{{ $cliens1->ClientSurname }}</td>
                <td>{{ $cliens1->ClientName }}</td>
                <td>{{ $cliens1->ClientPatronymic }}</td>
                <td>{{ $cliens1->ClientMail }}</td>
                <td>{{ $cliens1->ClientPhone }}</td>
                <td>{{ $cliens1->company->CompName }}</td>
                <td>{{ Html::secureLink(route('AdminPanel/Cliens/edit', $cliens1->id),
                   __('Изменить клиента')) }}</td>
                <td>{{ Html::secureLink(route('AdminPanel/Cliens/remove', $cliens1->id),
                   __('Удалить клиента')) }}</td>
            </tr>
        @endforeach
    </table>
</div>
{{$clien->links()}}
@endsection
