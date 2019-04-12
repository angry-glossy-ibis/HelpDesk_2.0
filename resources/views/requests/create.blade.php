{{-- Это шаблон формы добавления товара в БД, свёрстанный для Bootstrap --}}

{{-- Этот шаблон расширяет (наследует) resources/views/base.blade.php --}}
@extends('base')

{{-- В секции title родительского шаблона будет выведен перевод фразы: Create product --}}
@section('title', __('Заявка'))

{{-- В секции main родительского шаблона будет выведена форма --}}
@section('main')
    {{-- Форма предъявляется методом HTTP POST на маршрут products.create --}}
    {{
        Form::model($requests, [
            'method' => 'POST',
            'route'  => 'requests.store'
        ])
    }}

    {{-- Включаем шаблон resources/views/requests/partials/form.blade.php --}}
    @include('requests.partials.form')

    {{-- Кнопка предъявления формы --}}
    {{
        Form::submit(
            __('Отправить заявку'),
            [
                'class' => 'btn btn-success',
            ]
        )
    }}

    {{ Form::close() }}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{__('Добавление компании')}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <p>  {{ Form::text('CompName', null, ['class' => 'form-control', 'placeholder' => 'Название компании']) }} </p>
          <p>  {{ Form::text('CompMail', null, ['class' => 'form-control', 'placeholder' => 'Эл. потча компании']) }} </p>
          <p>  {{ Form::text('CompPhone', null, ['class' => 'form-control', 'placeholder' => 'Телефон']) }} </p>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" style="background-color: red; color: white;" data-dismiss="modal">{{__('Отмена')}}</button>
          {{
              Form::model($compan, [
                  'method' => 'POST',
                  'route'  => 'companis.storemodal'
              ])
          }}
          {{
              Form::submit(
                  __('Добавить компанию'),
                  [
                      'class' => 'btn btn-primary',
                  ]
              )
          }} {{ Form::close() }}
          </div>
        </div>
      </div>
    </div>
@endsection
