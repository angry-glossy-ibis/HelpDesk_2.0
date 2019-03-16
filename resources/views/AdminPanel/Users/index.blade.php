{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Users --}}
@section('title', __('Список пользователей'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')
<div class="col">
<div class="row">
<div class="container-fluid 3">
</div>
<p>
<a class="col btn btn-success" href="{{ route("AdminPanel.index") }}">{{__('назад')}}</a>
</p>
<p>
  <a class="col btn btn-success" href="{{ route("AdminPanel/Users/create") }}">{{__('Создать')}}</a>
</p>
</div>
</div>

<div class="table-responsive">
    <table class="table table-hover table-striped">
        <tr>
            <th>{{ __('Id') }}</th>
            <th>{{ __('Псевдоним') }}</th>
            <th>{{ __('Почта') }}</th>
            <th>{{ __('Имя') }}</th>
            <th>{{ __('Фамилия') }}</th>
            <th>{{ __('телефон') }}</th>
            <th>{{ __('Имя в Телеграмме') }}</th>
            <th>{{ __('изменить') }}</th>
            <th>{{ __('удалить') }}</th>
        </tr>
        @foreach ($users as $user1)
            <tr>
              <td>{{ Html::secureLink(
                  route('AdminPanel/Users/show', $user1->id),
                  $user1->id
              ) }}</td>
                <td>{{ $user1->login }}</td>
                <td>{{ $user1->email }}</td>
                <td>{{ $user1->name }}</td>
                <td>{{ $user1->surname }}</td>
                <td>{{ $user1->phone }}</td>
                <td>{{ $user1->TeleName }}</td>
                <td>{{ Html::secureLink(route('AdminPanel/Users/edit', $user1->id),
                        __('Изменить пользователя'))}}</td>
                <td>{{ Html::secureLink(route('AdminPanel/Users/remove', $user1->id),
                        __('Удалить пользователя'))}}</td>
            </tr>
        @endforeach
    </table>
</div>
{{$users->links()}}
@endsection
