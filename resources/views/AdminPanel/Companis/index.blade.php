{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Company --}}
@section('title', __('Компании'))

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
  <a class="col btn btn-success" href="{{ route("AdminPanel/Companis/create") }}">{{__('Создать')}}</a>
</p>
</div>
</div>
<div class="table-responsive">
    <table class="table table-hover table-striped">
        <tr>
            <th>{{ __('Id') }}</th>
            <th>{{ __('Название компании') }}</th>
            <th>{{ __('электроная почта') }}</th>
            <th>{{ __('Телефон') }}</th>
            <th>{{ __('изменить') }}</th>
            <th>{{ __('удалить') }}</th>
        </tr>
        @foreach ($compan as $company1)
            <tr>
              <td>{{ Html::secureLink(
                  route('AdminPanel/Companis/show', $company1->id),
                  $company1->id
              ) }}</td>
                <td>{{ $company1->CompName }}</td>
                <td>{{ $company1->CompMail }}</td>
                <td>{{ $company1->CompPhone }}</td>
                <td>{{ Html::secureLink(route('AdminPanel/Companis/edit', $company1->id),
                        __('Изменить компанию'))}}</td>
                <td>{{ Html::secureLink(route('AdminPanel/Companis/remove', $company1->id),
                        __('Удалить компанию'))}}</td>
            </tr>
        @endforeach
    </table>
</div>
{{$compan->links()}}
@endsection
