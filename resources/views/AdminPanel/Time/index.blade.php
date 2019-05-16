{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Menu Admina --}}
@section('title', __(''))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')
<div class="col">
<div class="row">
<div class="container-fluid 3">
  </div>
<p>
<a class="col btn btn-success" href="{{ route("AdminPanel.index") }}">{{__('назад')}}</a>
</p>
</div>
</div>
<div class="table-responsive">
    <table class="table table-hover table-striped">
        <tr>
            <th>{{ __('Id') }}</th>
            <th>{{ __('Название компании') }}</th>
            <th>{{ __('электроная почта') }}</th>
          </tr>
          @foreach ($compan as $company1)
              <tr>
                <td>{{ Html::secureLink(
                    route('AdminPanel/Companies/show', $company1->id),
                    $company1->id
                ) }}</td>
                  <td>{{ $company1->CompName }}</td>
                  <td>{{ $company1->CompMail }}</td>
                  <td>{{ Html::secureLink(route('AdminPanel/Companies/edit', $company1->id),
                          __('Изменить'))}}</td>
                  <td>{{ Html::secureLink(route('AdminPanel/Companies/remove', $company1->id),
                                  __('Удалить'))}}</td>
              </tr>
@endsection
