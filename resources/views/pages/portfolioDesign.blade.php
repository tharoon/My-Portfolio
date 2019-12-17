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
	<img src = "{{ asset('images/dise3.jpg') }}" alt = "image1" style="width:80%;height:48%;margin-left: 10%;">
</div>
<br>
<div>
	<img src = "{{ asset('images/dise4.jpg') }}" alt = "image1" style="width:80%;height:48%;margin-left: 10%;">
</div>

<br>
<div>
	<img src = "{{ asset('images/dise5.jpg') }}" alt = "image1" style="width:80%;height:48%;margin-left: 10%;">
</div>


<br>
<div>
	<img src = "{{ asset('images/dise6.jpg') }}" alt = "image1" style="width:80%;height:48%;margin-left: 10%;">
</div>

<br>
<div>
	<img src = "{{ asset('images/dise7.jpg') }}" alt = "image1" style="width:80%;height:48%;margin-left: 10%;">
</div>
</body>
</html>