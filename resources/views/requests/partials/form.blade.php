{{-- Этот шаблон с полями формы, свёрстанный для Bootstrap --}}
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script defer src="{{ asset('js/avtocomplit.js') }}"></script>
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
    {{ Form::label('fam', __('Фамилия')) }}
    {{ Form::text('ClientSurname', null, ['class' => 'form-control', 'placeholder' => 'Иванов']) }}
  </div>
  <div class="form-group">
    {{ Form::label('name', __('Имя')) }}
    {{ Form::text('ClientName', null, ['class' => 'form-control', 'placeholder' => 'Иван']) }}
  </div>
  <div class="form-group">
    {{ Form::label('patr', __('Отчество')) }}
    {{ Form::text('ClientPatronymic', null, ['class' => 'form-control', 'placeholder' => 'Иванович']) }}
  </div>
</div>
<div class="col-md-4 col-md-offset-4">
  <div class="form-group">
    {{ Form::label('phone', __('телефон')) }}
    {{ Form::text('ClientPhone', null, ['class' => 'form-control','pattern' => '\+\d+', 'placeholder' => '+74995484858']) }}
  </div>

  <div class="form-group">
    {{ Form::label('email', __('почта')) }}
    {{ Form::email('ClientMail', null, ['class' => 'form-control', 'placeholder' => 'ivan@gmail.ru']) }}
  </div>

  <div class="form-group">
    {{ Form::label('problem_suggestion', __('Название проблемы')) }}
    {{ Form::text('problem_suggestion', '', ['class' => 'custom-select d-block w-100']) }}
    {{ Form::hidden('problem_id', null, ['id' => 'problem_id', 'class' => 'form-control']) }}
  </div>
</div>
<div class="col-md-4 col-md-offset-4">
  <div class="form-group">
    {{ Form::label('summary', __('описание')) }}
    {{ Form::textarea('summary', null, ['class' => 'form-control', 'placeholder' => 'Опишите проблему']) }}
  </div>
</div>
</div>
{{ Form::hidden('state_id', 1, ['class' => 'form-control']) }}
