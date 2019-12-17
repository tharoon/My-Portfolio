<html>
<head>
	<title>User</title>
		<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/portfolio.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body>
	<div class="headBox">
		<hr>
		<p class = "hireMeheaderBox">DELETE Hire Me</p>
		<hr>
	</div>

	<form action="{{ url('hireMeDelete')}}" method="post">
		{{csrf_field()}}
		<input type="text" name = "box" id = "username" class = "inputSize" placeholder="Hire Me Column Number" ><br>
		<br>

		<input type="submit" value = "Delete" class = "buttonContactMe" name = "contactSubmit" onclick = "">

			</form>
</body>
</html>
