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
		<p class = "hireMeheaderBox">DELETE USERS</p>
		<hr>
	</div>

	<form action="{{ url('deleteUser')}}" method="post">
		{{csrf_field()}}
		Username:
		<input type="text" name = "username" id = "username" class = "inputSize" placeholder="Username" ><br>
		<br>

		<input type="submit" value = "Delete" class = "buttonContactMe" name = "contactSubmit" onclick = "">

			</form>
</body>
</html>
