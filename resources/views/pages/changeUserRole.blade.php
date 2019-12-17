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
		<p class = "hireMeheaderBox">CHNAGE USER ROLE</p> 
		<hr>
	</div>

	<form action="{{ url('changeUserRole')}}" method="post">
		{{csrf_field()}}
		Username:
		<input type="text" name = "username" id = "username" class = "inputSize" placeholder="Username" ><br>
		<br>

		User Role:
		<input type="text" name = "userRole" id = "userRole" class = "inputSize" placeholder="User Role" >
		<br>

		<input type="submit" value = "Update" class = "buttonContactMe" name = "contactSubmit" onclick = "">

	</form>
</body>
</html>