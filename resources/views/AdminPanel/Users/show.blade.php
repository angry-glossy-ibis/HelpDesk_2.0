<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="/rzd1/storage/app/icon.ico">

    <title>{{__('Просмотр пользователя')}}</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/about_project/jumbotron.css?x') }}" rel="stylesheet">
    <link href="{{ asset('css/backcolor.css') }}" rel="stylesheet">

    <script defer src="{{ asset('js/app.js') }}"></script>
		<script defer src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
		<script defer src="https://www.chartjs.org/samples/latest/utils.js"></script>
		<script defer src="{{ asset('js/diagram.js') }}"></script>
	</head>

  <body>
		<nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: white !important;">
				<div class="container-fluid 1">

						<a class="navbar-brand" href="{{ route("redirection") }}">
								{{ config('app.name', 'Laravel') }}
						</a>

						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<!-- Left Side Of Navbar -->
								<ul class="navbar-nav mr-auto">

								</ul>

								<!-- Right Side Of Navbar -->
								<ul class="navbar-nav ml-auto">
										<!-- Authentication Links -->
										@guest
										<li><a class="nav-link" href="{{ route('login') }}">{{ __('Войти') }}</a></li>
										@else
												<li class="nav-item dropdown">
														<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
																{{ Auth::user()->name }} <span class="caret"></span>
														</a>

														<div class="dropdown-menu" aria-labelledby="navbarDropdown">
																<a class="dropdown-item" href="{{ route('logout') }}"
																	 onclick="event.preventDefault();
																								 document.getElementById('logout-form').submit();">
																		{{ __('Выйти') }}
																</a>

																<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																		@csrf
																</form>
														</div>
												</li>
										@endguest
								</ul>
						</div>
				</div>
		</nav>
		<div class="row">
		  <div class="col-sm-15">
		    <div class="container-fluid 1">
		      <a class="mt-1 ml-3 btn btn-success" href="{{ route("AdminPanel/Users/index") }}">{{__('назад')}}</a>
		    </div>
		  </div>
		</div>
    <div class="container">


      <div class="row">
        <div class="col-md-4 order-md-1 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3 ml-5">
            <span class="text-muted">{{__('График рейтинга')}}</span>
          </h4>
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
        </div>
        <div class="col-md-8 order-md-2">
          <h4 class="mb-3">{{__('Информация о пользователях')}}</h4>
					@include('AdminPanel/Users/partials.form')
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; В будущем здесь будет подвал!</p>
      </footer>
    </div>
  </body>
</html>
