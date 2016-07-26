<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Weather API</title>
	<script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('form').submit(function(){
				var location = ($('input').val());
				$.get("http://api.openweathermap.org/data/2.5/weather?q=" + location + "&units=imperial&appid=13e3628fcb5fb6563d071a2dbb97252d", function(data) {
					console.log(data.main.temp);
					$('#result').append('<h1>'+data.name+'</h1><p>' + data.main.temp +'</p>');

				}, 'json');
				return false;
			})

		});
	</script>
</head>
<body>
	<form action="" method="get">
		<input type="text" name="weather">
		<button>Search Weather</button>
	</form>
	<div id="result"></div>
</body>
</html>