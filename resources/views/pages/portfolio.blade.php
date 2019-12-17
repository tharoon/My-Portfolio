<html>
<head>
	<title>Portfolio</title>
	<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/portfolio.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="headBox">
<hr>
<p class = "portfolioheaderBox">PORTFOLIO</p>
<hr>
</div>
<p class = "portfolioHeadings"> <a href = "{{url('portfolio')}}">All</a>
 <a href = "{{url('portfolioWebsite')}}">Websites</a>
 <a href = "{{url('portfolioApps')}}">Apps</a>
<a href = "{{url('portfolioDesign')}}">Design</a>
<a href= "{{url('portfolioPhotography')}}">Photography</a> </p>

<div class="portfolio_row">
	<div class="portfolio_column">
		@foreach($data as $value)
			@if($value->imagenumber == 'image1')
				<img src = "{{ asset($value->image) }}" alt = "image1" style="width:98%;height: 28%;">
			@endif
		@endforeach
		@foreach($data as $value)
			@if($value->imagenumber == 'image2')
				<img src = "{{ asset($value->image) }}" alt = "image2" style="width:98%;height: 70%; margin-top: 10px;">
			@endif
		@endforeach
		@foreach($data as $value)
			@if($value->imagenumber == 'image3')
				<img src = "{{ asset($value->image) }}" alt = "image3" style="width:98%;height: 60%; margin-top: 10px;">
			@endif
		@endforeach
		@foreach($data as $value)
			@if($value->imagenumber == 'image4')
				<img src = "{{ asset($value->image) }}" alt = "image1" style="width:99%;height: 68%;margin-top: 10px;">
			@endif
		@endforeach

	</div>


	<div class="portfolio_column">
		@foreach($data as $value)
			@if($value->imagenumber == 'image5')
				<img src = "{{ asset($value->image) }}" alt = "image1" style="width:99%;height: 40%;margin-top: 10px;">
			@endif
		@endforeach
		@foreach($data as $value)
			@if($value->imagenumber == 'image6')
				<img src = "{{ asset($value->image) }}" alt = "image1" style="width:99%;height: 68%;margin-top: 10px;">
			@endif
		@endforeach
		@foreach($data as $value)
			@if($value->imagenumber == 'image7')
				<img src = "{{ asset($value->image) }}" alt = "image1" style="width:99%;height: 82%;margin-top: 10px;">
			@endif
		@endforeach
		@foreach($data as $value)
			@if($value->imagenumber == 'image8')
				<img src = "{{ asset($value->image) }}" alt = "image1" style="width:99%;height: 30%;margin-top: 10px;">
			@endif
		@endforeach


	</div>





	<div class="portfolio_column">
		@foreach($data as $value)
			@if($value->imagenumber == 'image9')
				<img src = "{{ asset($value->image) }}" alt = "image1" style="width:99%;height: 70%;">
			@endif
		@endforeach
		@foreach($data as $value)
			@if($value->imagenumber == 'image10')
				<img src = "{{ asset($value->image) }}" alt = "image1" style="width:99%;height: 50%;margin-top: 10px;">
			@endif
		@endforeach
		@foreach($data as $value)
			@if($value->imagenumber == 'image11')
				<img src = "{{ asset($value->image)}}" alt = "image1" style="width:99%;height: 60%;margin-top: 10px;">
			@endif
		@endforeach
		@foreach($data as $value)
			@if($value->imagenumber == 'image12')
				<img src = "{{ asset($value->image) }}" alt = "image1" style="width:99%;height: 28%;margin-top: 10px;">
			@endif
		@endforeach

	</div>
	</div>
</div>

<button class = "buttNavigatorPortfolio" onclick="location.href = 'indexGuest'"><img src = "{{ asset('images/arrow.jpg') }}" alt = "arrow" class = "buttonImage"></button>
























	</body>
	</html>
