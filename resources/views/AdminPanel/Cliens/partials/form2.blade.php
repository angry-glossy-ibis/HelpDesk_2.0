{{-- Этот шаблон с полями формы, свёрстанный для Bootstrap --}}
<div class="row">
  <div class="col-sm-15">
    <div class="container-fluid 1">
      <a class="col btn btn-success" href="{{ route("AdminPanel/Cliens/index") }}">{{__('назад')}}</a>
    </div>
  </div>
</div>
  <div class="row">
    <div class="col-md-1">
      <div class="form-group">
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('ClientSurname', __('Фамилия')) }}
      {{ Form::text('ClientSurname', $cliens1->ClientSurname, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('ClientName', __('Имя')) }}
      {{ Form::text('ClientName', $cliens1->ClientName, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('ClientPatronymic', __('Отчество')) }}
      {{ Form::text('ClientPatronymic', $cliens1->patronymic, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('ClientMail', __('почта')) }}
      {{ Form::text('ClientMail', $cliens1->ClientMail, ['class' => 'form-control']) }}
    </div>
  </div>
  <div class="row">
    <div class="col-md-1">
      <div class="form-group">
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('ClientPhone', __('контактный телефон')) }}
      {{ Form::text('ClientPhone', $cliens1->ClientPhone, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('company', __('Компания')) }}
      {{ Form::text('company', $cliens1->company->CompName, ['class' => 'form-control', 'disabled']) }}
    </div>
    <div class="form-group">
      {{ Form::label('create1', __('Дата создания')) }}
      {{ Form::text('create1', $cliens1->created_at, ['class' => 'form-control', 'disabled']) }}
    </div>
    <div class="form-group">
      {{ Form::label('update1', __('Дата последнего изменения')) }}
      {{ Form::text('update1', $cliens1->updated_at, ['class' => 'form-control', 'disabled']) }}
    </div>
  </div>
