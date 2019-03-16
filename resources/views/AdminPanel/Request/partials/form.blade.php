{{-- Этот шаблон с полями формы, свёрстанный для Bootstrap --}}
<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
<a class="col btn btn-success" href="{{ route("AdminPanel/request/index") }}">{{__('назад')}}</a>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
  <div class="form-group">
      {{ Form::label('created_request', __('Данные клиента')) }}
</div>
</div>
<div class="form-group">
{{ Form::label('ClientSurname', __('Фамилия')) }}
{{ Form::text('ClientSurname', $request1->client->ClientSurname, ['class' => 'form-control', 'disabled']) }}
</div>

<div class="form-group">
{{ Form::label('ClientName', __('Имя')) }}
{{ Form::text('ClientName', $request1->client->ClientName, ['class' => 'form-control', 'disabled']) }}
</div>

<div class="form-group">
{{ Form::label('ClientPatronymic', __('Отчество')) }}
{{ Form::text('ClientPatronymic', $request1->client->ClientPatronymic, ['class' => 'form-control', 'disabled']) }}
</div>
<div class="form-group">
{{ Form::label('CompName', __('Компания')) }}
{{ Form::text('CompName',  $request1->client->company->CompName, ['class' => 'form-control', 'disabled']) }}
</div>
</div>
<div class="row">
<div class="col-md-4">
  <div class="form-group">
{{ Form::label('Worker', __('Сотрудник создавший заявку')) }}
</div>
</div>
<div class="form-group">
{{ Form::label('surname', __('Фамилия')) }}
{{ Form::text('surname', $request1->User->surname, ['class' => 'form-control', 'disabled']) }}
</div>

<div class="form-group">
{{ Form::label('name', __('Имя')) }}
{{ Form::text('name',  $request1->User->name, ['class' => 'form-control', 'disabled']) }}
</div>

<div class="form-group">
{{ Form::label('potronymic', __('Отчество')) }}
{{ Form::text('patronymic', $request1->User->patronymic, ['class' => 'form-control', 'disabled']) }}
</div>
<div class="form-group">
{{ Form::label('position', __('Должность')) }}
{{ Form::text('position', $request1->User->position->name, ['class' => 'form-control', 'disabled']) }}
</div>
</div>
<div class="row">
<div class="col-md-4">
  <div class="form-group">
      {{ Form::label('Request', __('Данные заявки')) }}
</div>
</div>
<div class="form-group">
{{ Form::label('name', __('Название проблемы')) }}
{{ Form::text('name', $request1->name, ['class' => 'form-control', 'disabled']) }}
</div>
<div class="form-group">
{{ Form::label('state', __('Статус')) }}
{{ Form::text('state', $request1->state->name, ['class' => 'form-control', 'disabled']) }}
</div>
</div>
<div class="row">
<div class="col-lg4 summary" style="margin-left: 20px">
  <div class="form-group">
    <p>
  {{ Form::label('summary', __('Описание')) }}
  {{ Form::textarea('summary', $request1->summary, ['class' => 'form-control', 'disabled']) }}
  </p>
  </div>
</div>
<div class="col-lg8 comm" style="margin-left: 20px">
  <div class="form-group">
  <p>
  {{ Form::label('comm', __('Комментарий')) }}
  {{ Form::textarea('comm', $request1->comm, ['class' => 'form-control', 'disabled']) }}
  <p>
  </div>
</div>
</div>
