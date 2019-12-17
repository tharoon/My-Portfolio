<html>
<head>
	<title>About Me</title>
	<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/portfolio.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body>




	<div id="container">
		<div id="aboutMEheader">
			<div class="headBox">
				<hr>
				<p class = "aboutMeheaderBox">ABOUT ME</p> 
				<hr>
			</div>
		</div>

		<div id="container">
			<div id="content">
				<div id="columns-container">
					<div class="column aboutMe_column-a	">
						@foreach($data as $value)
						<p><img src = "{{ asset($value->image) }}" alt = "my_photo" class = "center">
							<p style = "text-align: center;">Developer / 3D Design</p>
						</div>

						<div class="column aboutMe_column-b">
							<p>
								<table  width = "100%" height = "35%">
									<tr>
										<td width = "50"><img src = "{{ asset('images/contact.jpg') }}" alt = "name" style="width:40px;height:40px"></td>
										<td>
											Name<br>
											{{ $value->name }}
										</td>
										<td width="50"><img src = "{{ asset('images/mailAboutMe.jpg') }}" alt = "mail" style="width:40px;height:40px"></td>
										<td>Email<br>
											{{ $value->email }}
										</td>
									</tr>
									<tr>
										<td>
											<img src = "{{ asset('images/phoneAboutMe.jpg') }}" alt = "phone" style="width:40px;height:40px">
										</td>
										<td>
											Phone<br>
											{{ $value->phone }}
										</td>
										<td>
											<img src = "{{ asset('images/calendarAboutMe.jpg') }}" alt = "calender" style="width:40px;height:40px">
										</td>
										<td>Date of Birthday<br>
											{{ $value->dob }}
										</td>

									</tr>
									<tr>
										<td>
											<img src = "{{ asset('images/locationAboutMe.jpg') }}" alt = "location" style="width:40px;height:40px">
										</td>
										<td>
											Address<br>
											{{ $value->address }}
										</td>
										<td>
											<img src = "{{ asset('images/nationalityAboutMe.jpg') }}" alt = "flag" style="width:40px;height:40px">
										</td>
										<td>Nationality<br>
											{{ $value->nationality }}
										</td>


									</tr>
								</table>
								@endforeach
							</p>

							<p>
								Social Profiles
								<a href="https://www.facebook.com/trodj" class="fa fa-facebook"></a>
								<a href="https://www.linkedin.com/in/tharoontt" class="fa fa-linkedin"></a>
								<a href="#" class="fa fa-twitter"></a>
								<a href="#" class="fa fa-pinterest"></a>
								<a href="#" class="fa fa-snapchat"></a>
							</p>
							<p style = "line-height: 25px; word-wrap: break-word;"> 
								I have around 2 years of work experience in software development and software quality assurance. I have a good knowledge in JAVA, HTML, CSS, javascript and php. I have worked in test automation softwares like selenium, HP QFT. I have also used jUNIT, JaCoCO and PIT for functional testing.<br>
								<br>

								<strong>My objectives</strong> are increasing my knowledge in computer science fields and new technologies especially web development and web design field. Always looking forward to learn new technologies and be a part of a huge change in the world.<br>
								<br>
								




								Yours Sincerely,<br>
								<img src = "{{ asset('images/Signature.jpg') }}" alt = "signature" style="width: 200px;height: 60px; margin-top: 4px;">

								<button class = "buttNavigator" onclick="location.href = 'indexGuest'"><img src = "{{ asset('images/arrow.jpg') }}" alt = "arrow" class = "buttonImage"></button>



							</p>
						</div>
					</body>
					</html>