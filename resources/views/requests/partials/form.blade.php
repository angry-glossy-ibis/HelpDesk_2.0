{{-- Этот шаблон с полями формы, свёрстанный для Bootstrap --}}
<div class="row">
  <div class="col-sm-15">
    <div class="container-fluid 1">
      <a class="col btn btn-success" href="{{ route("requests.index") }}">{{__('назад')}}</a>
    </div>
  </div>
</div>

<div class="row justify-content-center">
<div class="col-sm-15">
<div class="container-fluid 1">
</div>
</div>
<div class="border border-grey col-3 justify-content-center text-center">
<p>
  {{ Form::label('company_id', __('Выберите компанию')) }}
  {{ Form::select('company_id', $companies, ['class' => 'form-control']) }}
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    {{__('Добавить компанию')}}
  </button>
</p>
</div>
</div>

<div class="row">
<div class="col-md-4">
  <div class="form-group">
      {{ Form::label('name', __('Имя')) }}
      {{ Form::text('ClientName', null, ['class' => 'form-control']) }}
  </div>
  <div class="form-group">
      {{ Form::label('fam', __('Фамилия')) }}
      {{ Form::text('ClientSurname', null, ['class' => 'form-control']) }}
  </div>
  <div class="form-group">
      {{ Form::label('patr', __('Отчество')) }}
      {{ Form::text('ClientPatronymic', null, ['class' => 'form-control']) }}
  </div>
</div>
<div class="col-md-4 col-md-offset-4">
  <div class="form-group">
      {{ Form::label('phone', __('телефон')) }}
      {{ Form::number('ClientPhone', null, ['class' => 'form-control']) }}
  </div>

  <div class="form-group">
      {{ Form::label('email', __('почта')) }}
      {{ Form::email('ClientMail', null, ['class' => 'form-control']) }}
  </div>

  <div class="form-group">
      {{ Form::label('name', __('название проблемы')) }}
      {{ Form::text('name', null, ['class' => 'form-control']) }}
  </div>
</div>
<div class="col-md-4 col-md-offset-4">
  <div class="form-group">
      {{ Form::label('summary', __('описание')) }}
      {{ Form::textarea('summary', null, ['class' => 'form-control']) }}
  </div>
</div>
</div>
{{ Form::hidden('state_id', 1, ['class' => 'form-control']) }}
