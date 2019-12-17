<html>
<head>
	<title>Portfolio</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo e(asset('css/portfolio.css')); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="headBox">
<hr>
<p class = "portfolioheaderBox">PORTFOLIO</p> 
<hr>
</div>
<p class = "portfolioHeadings"> <a href = "<?php echo e(url('portfolio')); ?>">All</a>
 <a href = "<?php echo e(url('portfolioWebsite')); ?>">Websites</a>
 <a href = "<?php echo e(url('portfolioApps')); ?>">Apps</a>
<a href = "<?php echo e(url('portfolioDesign')); ?>">Design</a> 
<a href= "<?php echo e(url('portfolioPhotography')); ?>">Photography</a> </p>

<div>
	<img src = "<?php echo e(asset('images/app5.jpg')); ?>" alt = "image1" style="width:20%;height:60%;margin-left: 10%;">
</div>

<div>
	<img src = "<?php echo e(asset('images/app7.jpg')); ?>" alt = "image1" style="width:20%;height:60%;margin-left: 40%; position: absolute;top:20%">
</div>

<div>
	<img src = "<?php echo e(asset('images/app8.jpg')); ?>" alt = "image1" style="width:20%;height:60%;margin-left: 70%; position: absolute;top:20%">
</div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/portfolioApps.blade.php ENDPATH**/ ?>