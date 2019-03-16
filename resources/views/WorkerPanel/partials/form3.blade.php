<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
<a class="col btn btn-success" href="{{ route("WorkerPanel.index") }}">{{__('назад')}}</a>
</div>
</div>
</div>

<div class="row">
<div class="col-md-4">
  <div class="form-group">
      {{ Form::label('email', __('Почта:')) }}
      {{ Form::text('email', null, ['class' => 'form-control']) }}
  </div>
  <div class="form-group">
      {{ Form::label('subject', __('Тема:')) }}
      {{ Form::text('subject', null, ['class' => 'form-control']) }}
  </div>
  </div>
  <div class="col-md-4 col-md-offset-4">
  <div class="form-group">
      {{ Form::label('description', __('Текст сообщения:')) }}
      {{ Form::textarea('description', null, ['class' => 'form-control']) }}
  </div>
</div>
</div>
