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
		<p class = "hireMeheaderBox">Resume</p> 
		<hr>
	</div>

<div style = "list-style-type: none; margin-left: 10%;">

	<li><a href = "{{url('resumeUpdateCompany')}}">Update Company Information</a></li>
	<br>

	<li><a href = "{{url('resumeUpdateDesignation')}}">Update Designation</a></li>
	<br>

	<li><a href = "{{url('deleteResume')}}">Delete Resume</a></li>
	<br>


	<li><a href = "{{url('insertResume')}}">Insert Resume</a></li>
	<br>
	
</div>



</body>
</html>	
