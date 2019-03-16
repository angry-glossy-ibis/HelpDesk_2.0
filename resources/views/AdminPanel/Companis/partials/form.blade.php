{{-- Этот шаблон с полями формы, свёрстанный для Bootstrap --}}
<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
<a class="col btn btn-success" href="{{ route("AdminPanel/Companis/index") }}">{{__('назад')}}</a>
</div>
</div>
</div>

<div class="row">
<div class="col-md-4">
  <div class="form-group">
      {{ Form::label('CompName', __('Название компании')) }}
      {{ Form::text('CompName', $company1 -> CompName, ['class' => 'form-control', 'disabled']) }}
  </div>
  <div class="form-group">
      {{ Form::label('CompMail', __('Корпоративная почта')) }}
      {{ Form::text('CompMail', $company1 -> CompMail, ['class' => 'form-control', 'disabled']) }}
  </div>
  <div class="form-group">
      {{ Form::label('CompPhone', __('телефон')) }}
      {{ Form::text('CompPhone', $company1 -> CompPhone, ['class' => 'form-control', 'disabled']) }}
  </div>
</div>
</div>
