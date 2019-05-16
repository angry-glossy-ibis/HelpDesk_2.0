{{-- Этот шаблон с полями формы, свёрстанный для Bootstrap --}}
<style>
  .center {
    text-align: center;
  }
</style>
<div class = "center">
<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
<a class="col btn btn-success" href="{{ route("AdminPanel/Companies/index") }}">{{__('назад')}}</a>
</div>
</div>
</div>

<div class="row">
<div class="col-md-3">
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
<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
<a class="btn btn-block btn-warning" href="{{ route("AdminPanel/Companies/edit", $company1->id)}}">{{__('Редактировать')}}</a>
</div>
</div>
</div>
</div>
