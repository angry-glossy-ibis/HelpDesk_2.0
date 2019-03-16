{{-- Это шаблон перечня товаров из БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Request --}}
@section('title', __('Список заявок'))

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
            <th>{{ __('ID') }}</th>
            <th>{{ __('Статус') }}</th>
            <th>{{ __('Компания') }}</th>
            <th>{{ __('Название') }}</th>
            <th>{{ __('Описание') }}</th>
            <th>{{ __('Комментарий') }}</th>
            <th>{{ __('Created at') }}</th>
            <th>{{ __('Updated at') }}</th>
        </tr>
        @foreach ($requests as $request1)
        <tr>
          <td>{{ Html::secureLink(route('AdminPanel/request/show', $request1->id),
              $request1->id) }}</td>
                <td>{{ $request1->state->name }}</td>
                <td>{{ $request1->client->company->CompName }}</td>
                <td>{{ $request1->name }}</td>
                <td>{{ $request1->summary }}</td>
                <td>{{ $request1->comm }}</td>
                <td>{{ $request1->created_at }}</td>
                <td>{{ $request1->updated_at }}</td>
            </tr>
        @endforeach
    </table>
</div>
{{$requests->links()}}
@endsection
