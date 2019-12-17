
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
		<p class = "hireMeheaderBox">References</p> 
		<hr>
	</div>

<div style = "list-style-type: none; margin-left: 10%;">

	<li><a href = "{{ url('insertReference')}}">Insert Reference</a></li>
	<br>

	<li><a href = "{{ url('updateReference')}}">Update Reference</a></li>
	<br>

	<li><a href = "{{ url('deleteReference')}}">Delete Reference</a></li>
	<br>
</div>



</body>
</html>	