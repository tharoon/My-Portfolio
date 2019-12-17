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

<div class="portfolio_row">
	<div class="portfolio_column">
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($value->imagenumber == 'image1'): ?>
				<img src = "<?php echo e(asset($value->image)); ?>" alt = "image1" style="width:98%;height: 28%;">
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($value->imagenumber == 'image2'): ?>
				<img src = "<?php echo e(asset($value->image)); ?>" alt = "image2" style="width:98%;height: 70%; margin-top: 10px;">
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($value->imagenumber == 'image3'): ?>
				<img src = "<?php echo e(asset($value->image)); ?>" alt = "image3" style="width:98%;height: 60%; margin-top: 10px;">
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($value->imagenumber == 'image4'): ?>
				<img src = "<?php echo e(asset($value->image)); ?>" alt = "image1" style="width:99%;height: 68%;margin-top: 10px;">
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</div>


	<div class="portfolio_column">
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($value->imagenumber == 'image5'): ?>
				<img src = "<?php echo e(asset($value->image)); ?>" alt = "image1" style="width:99%;height: 40%;margin-top: 10px;">
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($value->imagenumber == 'image6'): ?>
				<img src = "<?php echo e(asset($value->image)); ?>" alt = "image1" style="width:99%;height: 68%;margin-top: 10px;">
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($value->imagenumber == 'image7'): ?>
				<img src = "<?php echo e(asset($value->image)); ?>" alt = "image1" style="width:99%;height: 82%;margin-top: 10px;">
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($value->imagenumber == 'image8'): ?>
				<img src = "<?php echo e(asset($value->image)); ?>" alt = "image1" style="width:99%;height: 30%;margin-top: 10px;">
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


	</div>





	<div class="portfolio_column">
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($value->imagenumber == 'image9'): ?>
				<img src = "<?php echo e(asset($value->image)); ?>" alt = "image1" style="width:99%;height: 70%;">
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($value->imagenumber == 'image10'): ?>
				<img src = "<?php echo e(asset($value->image)); ?>" alt = "image1" style="width:99%;height: 50%;margin-top: 10px;">
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($value->imagenumber == 'image11'): ?>
				<img src = "<?php echo e(asset($value->image)); ?>" alt = "image1" style="width:99%;height: 60%;margin-top: 10px;">
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php if($value->imagenumber == 'image12'): ?>
				<img src = "<?php echo e(asset($value->image)); ?>" alt = "image1" style="width:99%;height: 28%;margin-top: 10px;">
			<?php endif; ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

	</div>
	</div>
</div>

<button class = "buttNavigatorPortfolio" onclick="location.href = 'indexGuest'"><img src = "<?php echo e(asset('images/arrow.jpg')); ?>" alt = "arrow" class = "buttonImage"></button>
























	</body>
	</html>
<?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/portfolio.blade.php ENDPATH**/ ?>