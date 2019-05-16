{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Company --}}
@section('title', __('Компании'))

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
<a class="col btn btn-success" href="{{ route("AdminPanel.index") }}">{{__('назад')}}</a>
</p>
<hr>
<p>
  <a class="col btn btn-success" href="{{ route("AdminPanel/Companies/create") }}">{{__('Создать')}}</a>
</p>
</div>
</div>
<div class="table-responsive">
    <table id="table-id" class="table table-hover">
      <thead>
        <tr>
            <th>{{ __('Id') }}</th>
            <th>{{ __('Название компании') }}</th>
            <th>{{ __('электроная почта') }}</th>
            <th>{{ __('Телефон') }}</th>
            <th>{{ __('изменить') }}</th>
            <th>{{ __('удалить') }}</th>
        </tr>
        </thead>
        @foreach ($compan as $company)
            <tr>
              <td>
                <a class="btn btn-block btn-primary" href="{{ route("AdminPanel/Companies/show", $company->id)}}">{{__($company->id)}}</a>
              </td>
              <td>{{ $company->CompName }}</td>
              <td>{{ $company->CompMail }}</td>
              <td>{{ $company->CompPhone }}</td>
              <td>
                <a class="btn btn-block btn-warning" href="{{ route("AdminPanel/Companies/edit", $company->id)}}">{{__('Редактировать')}}</a>
              </td>
              <td>
                <a class="btn btn-block btn-danger" href="{{ route("AdminPanel/Companies/remove", $company->id)}}">{{__('X')}}</a>
              </td>
            </tr>
        @endforeach
    </table>
</div>
{{$compan->links()}}
<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">&copy; В будущем здесь будет подвал!</p>
</footer>
@endsection
