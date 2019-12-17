<html>
<head>
	<title>Hire Me</title>
	<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/portfolio.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body>


	<div class="headBox">
<hr>
<p class = "hireMeheaderBox">HIRE ME</p> 
<hr>
</div>
		

	<div class="hireMe_row">
		<div class="hireMe_column">
			@foreach($data as $value)
				@if($value->box == 'box1')
					<p><img src = "{{ asset('images/car4.jpg') }}" alt = "cart1" style = "width:415px; height:200px"></p> 
					<h1 style="text-align: center;">{{ $value->amount }}</h1>
					<P style="text-align: center;">{{ $value->mainservice }}</P>
					<p class = "hireMeText">{{ $value->service1 }}</p>
					<p class = "hireMeText">{{ $value->service2 }}</p>
					<p class = "hireMeText">{{ $value->service3 }}</p>
					<hr>
					<div id="wrapperButton">
					<input type="button" name="contactUs" value = "Contact US" class = "button" onclick="location.href = 'contactMe'">
					</div>
				@endif	
			@endforeach	

		</div>


		<div class="hireMe_column">
			@foreach($data as $value)
				@if($value->box == 'box2')
					<p><img src = "{{ asset('images/car5.jpg') }}" alt = "cart2" style = "width:415px; height:200px"></p> 
					<h1 style="text-align: center;">{{ $value->amount }}</h1>
					<P style="text-align: center;">{{ $value->mainservice }}</P>
					<p class = "hireMeText">{{ $value->service1 }}</p>
					<p class = "hireMeText">{{ $value->service2 }}</p>
					<p class = "hireMeText">{{ $value->service3 }}</p>
					<p class = "hireMeText">{{ $value->service4 }}</p>
					<hr>
					<div id="wrapperButton">
					<input type="button" name="contactUs" value = "Contact US" class = "button" onclick="location.href = 'contactMe'">
					</div>
				@endif	
			@endforeach	
			
		</div>

		<div class="hireMe_column">
			@foreach($data as $value)
				@if($value->box == 'box3')
					<p><img src = "{{ asset('images/car6.jpg') }}" alt = "cart3" style = "width:415px; height:200px"></p> 
					<h1 style="text-align: center;">{{ $value->amount }}</h1>
					<P style="text-align: center;">{{ $value->mainservice }}</P>
					<p class = "hireMeText">{{ $value->service1 }}</p>
					<p class = "hireMeText">{{ $value->service2 }}</p>
					<p class = "hireMeText">{{ $value->service3 }}</p>
					<p class = "hireMeText">{{ $value->service4 }}</p>
					<hr>
					<div id="wrapperButton">
					<input type="button" name="contactUs" value = "Contact US" class = "button" onclick="location.href = 'contactMe'">
				    </div>
				@endif	
			@endforeach    
			
		</div>
	</div>


	<button class = "buttNavigatorHireMe" onclick="location.href = 'indexGuest'"><img src = "{{ asset('images/arrow.jpg') }}" alt = "arrow" class = "buttonImage"></button>


</body>
</html>


