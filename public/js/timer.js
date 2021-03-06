window.onload = function () {
	'use strict';
	countdown.setLabels(
		'мс| с| мин| ч| д| нед| мес| г',
		'мс| с| мин| ч| д| нед| мес| г',
		' ',
	' ');
	// Запускаем таймер.
	var timer = countdown(
		// Момент времени, в который будет вызвана функция.
		new Date(document.getElementById('endtimer').value),

		// Функция обратного вызова.
		function (timespan) {

			// Выводим таймер в консоль и на страницу.
			console.log(timespan);
			document.getElementById('endtime').value = timespan;

			// Если заданный момент времени прошёл,
			if (timespan.value > 0) {

				// то отключаем таймер.
				window.clearInterval(timer);
				document.getElementById('endtime').style.background = '#f00';
				document.getElementById('endtime').value = 0;
				var id_request = document.getElementById('requestid').value;
				function Min(id_request)
				{
   				$.ajax({
      		url: 'http://localhost:8080/HelpDesk/public/WorkerPanel/1/decrating',
      		data: { id: id }
   			}).done(function() {
      		alert('Changed!');
   			});
			}
			}
		},

		// Вести отсчёт в секундах.
		countdown.HOURS|countdown.MINUTES|countdown.SECONDS
	);
};
