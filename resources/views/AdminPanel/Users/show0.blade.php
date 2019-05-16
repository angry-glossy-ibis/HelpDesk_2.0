@extends('base')
@section('title', __('Просмотр пользователя'))
@section('main')
{{-- Включаем шаблон resources/views/AdminPanel/Users/partials/form.blade.php --}}
<script defer src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
<script defer src="https://www.chartjs.org/samples/latest/utils.js"></script>
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
	</style>
	<div class="row">
	  <div class="col-sm-15">
	    <div class="container-fluid 1">
	      <a class="col btn btn-success" href="{{ route("AdminPanel/Users/index") }}">{{__('назад')}}</a>
	    </div>
	  </div>
	</div>
<div class="col">
<div class="row">
<div class="container-fluid 3">
</div>
<p>

</p>
</div>
</div>
<div id="canvas-holder" style="width: 300px;">
		<canvas id="chart-area" width="300" height="300"></canvas>
		<div id="chartjs-tooltip">
			<table></table>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-15">
			<div class="container-fluid 1">
			</div>
		</div>
	</div>

@include('AdminPanel/Users/partials.form')

<script defer src="{{ asset('js/diagram.js') }}"></script>

@endsection
