{{-- Этот шаблон с полями формы, свёрстанный для Bootstrap --}}
<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
<a class="col btn btn-success" href="{{ route("AdminPanel.index") }}">{{__('назад')}}</a>
</div>
</div>
</div>
<div class="row">
<div class="col-md-4">
  <div class="form-group">
      {{ Form::label('createdet', __('Выбирите данные для создания статистики')) }}
</div>
<div class="col-md-4">
{{ Form::label('Problem', __('Проблема')) }}
{{ Form::select('Problem', $problems, ['class' => 'form-control']) }}
</div>

<div class="col-md-4">
{{ Form::label('Time', __('Выберите период')) }}
{{ Form::select('Time', $time_period, ['class' => 'form-control']) }}
</div>

<div class="col-md-4">
{{ Form::label('Graff', __('Выберите вид графика')) }}
{{ Form::select('Graff', $graff, ['class' => 'form-control']) }}
</div>
</div>
</div>

<div class="row">
<div class="col-sm-15">
<div class="container-fluid 1">
<a id="create_report" class="col btn btn-success">{{ __('Создать отчет') }}</a>
<style>
    #canvas-holder {
      width: 100%;
      margin-top: 50px;
      text-align: center;
    }
    #chartjs-tooltip {
      opacity: 1;
      position: absolute;
      background: rgba(0, 0, 0, .7);
      color: white;
      border-radius: 3px;
      -webkit-transition: all .1s ease;
      transition: all .1s ease;
      pointer-events: none;
      -webkit-transform: translate(-50%, 0);
      transform: translate(-50%, 0);
    }

    .chartjs-tooltip-key {
      display: inline-block;
      width: 10px;
      height: 10px;
      margin-right: 10px;
    }
    html, body{
      background-color: #f8f9fa !important;
    }

  </style>
<div id="canvas-holder" style="width: 300px;">
    <canvas id="chart-area" width="300" height="300"></canvas>
    <div id="chartjs-tooltip">
      <table></table>
    </div>
  </div>
<a class="col btn btn-success">{{__('выгрузить в pdf')}}</a>
<a class="col btn btn-success">{{__('распечатать')}}</a>
</div>
</div>
</div>
