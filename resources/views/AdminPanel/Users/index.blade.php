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
  <h1>{{__('Список пользователей')}}</h1>
  </div>
  <div class="col-md-4">
  </div>
</div>

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
    <table id="table-id" class="table table-hover">
      <thead>
        <tr>
            <th>{{ __('Id') }}</th>
            <th>{{ __('Псевдоним') }}</th>
            <th>{{ __('Почта') }}</th>
            <th>{{ __('Имя') }}</th>
            <th>{{ __('Фамилия') }}</th>
            <th>{{ __('телефон') }}</th>
            <th>{{ __('Имя в Телеграмме') }}</th>
            <th>{{ __('Роль') }}</th>
            <th>{{ __('изменить') }}</th>
            <th>{{ __('удалить') }}</th>
        </tr>
      </thead>
        @foreach ($users as $user1)
            <tr>
              <td>
              <a class="btn btn-block btn-primary" href="{{ route("AdminPanel/Users/show", $user1->id)}}">{{__($user1->id)}}</a>
            </td>
                <td>{{ $user1->login }}</td>
                <td>{{ $user1->email }}</td>
                <td>{{ $user1->name }}</td>
                <td>{{ $user1->surname }}</td>
                <td>{{ $user1->phone }}</td>
                <td>{{ $user1->TeleName }}</td>
                <td>{{ $user1->role->name }}</td>
                <td>
                  <a class="btn btn-block btn-warning" href="{{ route("AdminPanel/Users/edit", $user1->id)}}">{{__('Редактировать')}}</a></td>
                <td>
                  <a class="btn btn-block btn-danger" href="{{ route("AdminPanel/Users/remove", $user1->id)}}">{{__('Х')}}</a></td>
                </td>
            </tr>
        @endforeach
    </table>
</div>
{{$users->links()}}
<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; В будущем здесь будет подвал!</p>
</footer>
@endsection
