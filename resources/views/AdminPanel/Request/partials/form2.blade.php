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
        {{ Form::text('CompName', null, ['class' => 'form-control', 'placeholder' => 'Название компании']) }}
        {{ Form::text('CompMail', null, ['class' => 'form-control', 'placeholder' => 'Корп. почта']) }}
        {{ Form::number('CompPhone', null, ['class' => 'form-control', 'placeholder' => 'Телефон']) }}
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-secondary" style="background-color: red; color: white;" data-dismiss="modal">{{__('Отмена')}}</button>
      {{
          Form::model($compan, [
              'method' => 'POST',
              'route'  => 'companis.store'
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
