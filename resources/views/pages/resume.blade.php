<html>
<head>
	<title>Resume</title>
	<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/portfolio.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<div class="headBox">
		<hr>
		<p class = "hireMeheaderBox">RESUMES</p> 
		<hr>
	</div>

	<div class="resume_row">
		<div class="resume_column1">
			@foreach($data as $value)
				@if($value->box == 'box1')
					<div class = "arrowBox1">{{ $value->company_name }}</div>
					<div class = "arrowBox11">{{ $value->designation }}</div>
				@endif	
			@endforeach

			@foreach($data as $value)
				@if($value->box == 'box2')	
					<div class = "arrowBox2">{{ $value->company_name }}</div>
					<div class = "arrowBox21">{{ $value->designation }}</div>
				@endif	
			@endforeach	

			@foreach($data as $value)
				@if($value->box == 'box3')
					<div class = "arrowBox3">{{ $value->company_name }}</div>
					<div class = "arrowBox31">{{ $value->designation }}</div>
				@endif	
			@endforeach			


		</div>



		<div class="resume_column2">

			<div class="vl"></div>
			<p class = "maintext">2016</p>

			<div class="v2"></div>
			<p class = "maintext2">2014</p>

			<div class="v3"></div>
			<p class = "maintext3">2013</p>

			<div class="v4"></div>
			<p class = "maintext4">2012</p>

			<div class="v5"></div>
			<p class = "maintext5">2010</p>

			<div class="v6"></div>




		</div>







		<div class="resume_column3">
			@foreach($data as $value)
				@if($value->box == 'box4')
					<div class = "arrowBox4">{{ $value->company_name }}</div>
					<div class = "arrowBox41">{{ $value->designation }}</div>
				@endif	
			@endforeach

			@foreach($data as $value)
				@if($value->box == 'box5')
					<div class = "arrowBox5">{{ $value->company_name }}</div>
					<div class = "arrowBox51">{{ $value->designation }}</div>
				@endif	
			@endforeach


		</div>

	</div>
	<button class = "buttNavigatorResume" onclick="location.href = 'indexGuest'"><img src = "{{ asset('images/arrow.jpg')}}" alt = "arrow" class = "buttonImage"></button>

</body>
</html>
