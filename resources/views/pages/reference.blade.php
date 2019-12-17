<html>
<head>
	<title>Reference</title>
	<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/portfolio.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
		<div class="headBox">
<hr>
<p class = "hireMeheaderBox">REFERENCES</p> 
<hr>
</div>


	<div class="refernce_row">
		<div class="reference_column">			
			<div class = "referenceBoxBottom">
				@foreach($data as $value)
          			@if($value->box == 'box4')
						<h5 class = "referenceNameBottom">{{ $value->firstname }}</h5><br>
						<p class = "referenceRoleBottom1">{{ $value->designation}}</p>
						<p class = "referenceMessageBottom">{{ $value->description}}<!-- "As always, great creative thinking for the best solution.<br>
						<span style = "margin-left: 20px;">Luiis Miguel is by far the most professional and</span> <br><span style = "margin-left: 10px;">knowledgeable provider I worked with. I will hire him</span><br> <span style = "margin-left: 120px;margin-top: 10px;">again :)"</span>. -->
						<div>		
						<img src = "{{ asset('images/kyss.jpg') }}" alt = "profile picture" class = "referenceImage1">
						</div>
					@endif
      			@endforeach
				

			
		</div>

		<div class = "referenceBoxTop">
			@foreach($data as $value)
          		@if($value->box == 'box1')
					<h5 class = "referenceName">{{ $value->firstname }}</h5><br>
						<p class = "referenceRole1">{{ $value->designation}}</p>
						<p class = "referenceMessage">{{ $value->description}}<!-- "As always, great creative thinking for the best solution.<br>
							<span style = "margin-left: 20px;">Luiis Miguel is by far the most professional and</span> <br><span style = "margin-left: 10px;">knowledgeable provider I worked with. I will hire him</span><br> <span style = "margin-left: 120px;margin-top: 10px;">again :)"</span>. -->
						<div>		
						<img src = "{{ asset('images/joe.jpg') }}" alt = "profile picture" class = "referenceImage2"> 
						</div>
				@endif
      		@endforeach		
		</div>
			

		</div>

		<div class="reference_column">
			<div class = "referenceBoxBottom">
				@foreach($data as $value)
          			@if($value->box == 'box5')
						<h5 class = "referenceNameBottom">{{ $value->firstname }}</h5><br>
						<p class = "referenceRoleBottom1">{{ $value->designation}}</p>
						<p class = "referenceMessageBottom">{{ $value->description}}<!-- "As always, great creative thinking for the best solution.<br>
							<span style = "margin-left: 20px;">Luiis Miguel is by far the most professional and</span> <br><span style = "margin-left: 10px;">knowledgeable provider I worked with. I will hire him</span><br> <span style = "margin-left: 120px;margin-top: 10px;">again :)"</span>. -->
						<div>		
						<img src = "{{ asset('images/carhil.jpg') }}" alt = "profile picture" class = "referenceImage3"> 
						</div>
					@endif
      			@endforeach	

			
		</div>


			<div class = "referenceBoxTop">
				@foreach($data as $value)
          			@if($value->box == 'box2')
						<h5 class = "referenceName">{{ $value->firstname }}</h5><br>
						<p class = "referenceRole1">{{ $value->designation}}</p>
						<p class = "referenceMessage">{{ $value->description}}<!-- "As always, great creative thinking for the best solution.<br>
						<span style = "margin-left: 20px;">Luiis Miguel is by far the most professional and</span> <br><span style = "margin-left: 10px;">knowledgeable provider I worked with. I will hire him</span><br> <span style = "margin-left: 120px;margin-top: 10px;">again :)"</span>. -->
						<div>		
						<img src = "{{ asset('images/rosy.jpg') }}" alt = "profile picture" class = "referenceImage4"> 
						</div>
					@endif
      			@endforeach		
			</div>
			




		</div>


		<div class="reference_column">
				<div class = "referenceBoxBottom">
					@foreach($data as $value)
          				@if($value->box == 'box6')
							<h5 class = "referenceNameBottom">{{ $value->firstname }}</h5><br>
							<p class = "referenceRoleBottom1">{{ $value->designation}}<p>
							<p class = "referenceMessageBottom">{{ $value->description}}<!-- "As always, great creative thinking for the best solution.<br>
							<span style = "margin-left: 20px;">Luiis Miguel is by far the most professional and</span> <br><span style = "margin-left: 10px;">knowledgeable provider I worked with. I will hire him</span><br> <span style = "margin-left: 120px;margin-top: 10px;">again :)"</span>. -->
							<div>
							<img src = "{{ asset('images/leo.jpg') }}" alt = "profile picture" class = "referenceImage5">
						@endif
      				@endforeach 
		</div>

			
		</div>



				<div class = "referenceBoxTop">
					@foreach($data as $value)
          				@if($value->box == 'box3')
							<h5 class = "referenceName">{{ $value->firstname }}</h5><br>
							<p class = "referenceRole1">{{ $value->designation}}</p>
							<p class = "referenceMessage">{{ $value->description}}<!-- "As always, great creative thinking for the best solution.<br>
							<span style = "margin-left: 20px;">Luiis Miguel is by far the most professional and</span> <br><span style = "margin-left: 10px;">knowledgeable provider I worked with. I will hire him</span><br> <span style = "margin-left: 120px;margin-top: 10px;">again :)"</span>. -->
							<div>		
							<img src = "{{ asset('images/yury.jpg') }}" alt = "profile picture" class = "referenceImage6">
						@endif
      				@endforeach  
		</div>
		</div>





		</div>

	</div>


	<button class = "buttNavigatorResume" onclick="location.href = 'indexGuest'"><img src = "{{ asset('images/arrow.jpg') }}" alt = "arrow" class = "buttonImage"></button>
</body>
</html>