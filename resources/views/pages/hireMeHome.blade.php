
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Personal Information</title>
	<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/portfolio.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body>
	<div class="headBox">
		<hr>
		<p class = "hireMeheaderBox">Hire Me</p> 
		<hr>
	</div>

<div style = "list-style-type: none; margin-left: 10%;">

	<li><a href = "{{url('hireMeAdmin')}}">Update Hire Me</a></li>
	<br>

	<li><a href = "{{ url('hireMeDelete')}}">Delete Hire Me</a></li>
	<br>
	<li><a href = "{{ url('hireMeInsert')}}">Insert Hire Me</a></li>
	<br>
</div>



</body>
</html>	