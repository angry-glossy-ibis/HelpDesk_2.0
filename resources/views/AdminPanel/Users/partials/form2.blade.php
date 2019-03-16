{{-- Этот шаблон с полями формы, свёрстанный для Bootstrap --}}
  <div class="row">
    <div class="col-sm-15">
      <div class="container-fluid 1">
        <a class="col btn btn-success" href="{{ route("AdminPanel/Users/index") }}">{{__('назад')}}</a>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-1">
      <div class="form-group">
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('Surname', __('Фамилия')) }}
      {{ Form::text('Surname', $user1->surname, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('Name', __('Имя')) }}
      {{ Form::text('Name', $user1->name, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('Patronymic', __('Отчество')) }}
      {{ Form::text('Patronymic', $user1->patronymic, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('phone', __('Телефон')) }}
      {{ Form::text('phone', $user1->phone, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('TeleName', __('Имя в телеграмме')) }}
      {{ Form::text('TeleName', $user1->TeleName, ['class' => 'form-control']) }}
    </div>
  </div>
  <div class="row">
    <div class="col-md-1">
      <div class="form-group">
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('login', __('Псевдоним в системе')) }}
      {{ Form::text('login', $user1->login, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('email', __('Электронная почта')) }}
      {{ Form::text('email', $user1->email, ['class' => 'form-control']) }}
    </div>
    <div class="form-group">
      {{ Form::label('password', __('Пароль(зашифрован)')) }}
      {{ Form::text('password', $user1->password, ['class' => 'form-control', 'disabled']) }}
    </div>
    <div class="form-group">
      {{ Form::label('role', __('Роль в системе')) }}
      {{ Form::text('role', $user1->role->name, ['class' => 'form-control', 'disabled']) }}
    </div>
    <div class="form-group">
      {{ Form::label('position', __('Должность')) }}
      {{ Form::text('position', $user1->position->name, ['class' => 'form-control', 'disabled']) }}
    </div>
  </div>
