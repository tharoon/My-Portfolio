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

<div>
	<img src = "{{ asset('images/app5.jpg') }}" alt = "image1" style="width:20%;height:60%;margin-left: 10%;">
</div>

<div>
	<img src = "{{ asset('images/app7.jpg') }}" alt = "image1" style="width:20%;height:60%;margin-left: 40%; position: absolute;top:20%">
</div>

<div>
	<img src = "{{ asset('images/app8.jpg') }}" alt = "image1" style="width:20%;height:60%;margin-left: 70%; position: absolute;top:20%">
</div>
</body>
</html>
