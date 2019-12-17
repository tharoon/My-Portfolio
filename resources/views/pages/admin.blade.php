<html>
<head>
	<title>Admin</title>
	<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/portfolio.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body>
	<div class="headBox">
		<hr>
		<p class = "hireMeheaderBox">ADMIN</p> 
		<hr>
	</div>


	<div style = "list-style-type: none;">
		<li><a href = "{{url('personalInformationAdmin')}}" class = "adminButton">Personal Information</a></li>
		<li><a href = "{{url('aboutMeAdmin')}}" class = "adminButton">About Me</a></li>
		<li><a href = "{{url('resumeAdminHome')}}" class = "adminButton">Resume</a></li>
		<li><a href = "{{url('userHomePage')}}" class = "adminButton">Users</a></li>
		<li><a href = "{{url('hireMeHome')}}" class = "adminButton">Hire Me</a></li>
		<li><a href = "{{url('portfolioHomePage')}}" class = "adminButton">Portfolio</a></li>
		<li><a href = "{{url('referencesHome')}}" class = "adminButton">Reference</a></li>
		<li><a href = "{{url('skillsHomeAdmin')}}" class = "adminButton">Skills</a></li>
	</div>


</body>
</html>