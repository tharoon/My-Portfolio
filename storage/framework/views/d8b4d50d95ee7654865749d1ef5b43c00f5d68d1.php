<html>
<head>
	<title>Hire Me</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo e(asset('css/portfolio.css')); ?>">
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
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($value->box == 'box1'): ?>
					<p><img src = "<?php echo e(asset('images/car4.jpg')); ?>" alt = "cart1" style = "width:415px; height:200px"></p> 
					<h1 style="text-align: center;"><?php echo e($value->amount); ?></h1>
					<P style="text-align: center;"><?php echo e($value->mainservice); ?></P>
					<p class = "hireMeText"><?php echo e($value->service1); ?></p>
					<p class = "hireMeText"><?php echo e($value->service2); ?></p>
					<p class = "hireMeText"><?php echo e($value->service3); ?></p>
					<hr>
					<div id="wrapperButton">
					<input type="button" name="contactUs" value = "Contact US" class = "button" onclick="location.href = 'contactMe'">
					</div>
				<?php endif; ?>	
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	

		</div>


		<div class="hireMe_column">
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($value->box == 'box2'): ?>
					<p><img src = "<?php echo e(asset('images/car5.jpg')); ?>" alt = "cart2" style = "width:415px; height:200px"></p> 
					<h1 style="text-align: center;"><?php echo e($value->amount); ?></h1>
					<P style="text-align: center;"><?php echo e($value->mainservice); ?></P>
					<p class = "hireMeText"><?php echo e($value->service1); ?></p>
					<p class = "hireMeText"><?php echo e($value->service2); ?></p>
					<p class = "hireMeText"><?php echo e($value->service3); ?></p>
					<p class = "hireMeText"><?php echo e($value->service4); ?></p>
					<hr>
					<div id="wrapperButton">
					<input type="button" name="contactUs" value = "Contact US" class = "button" onclick="location.href = 'contactMe'">
					</div>
				<?php endif; ?>	
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			
		</div>

		<div class="hireMe_column">
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($value->box == 'box3'): ?>
					<p><img src = "<?php echo e(asset('images/car6.jpg')); ?>" alt = "cart3" style = "width:415px; height:200px"></p> 
					<h1 style="text-align: center;"><?php echo e($value->amount); ?></h1>
					<P style="text-align: center;"><?php echo e($value->mainservice); ?></P>
					<p class = "hireMeText"><?php echo e($value->service1); ?></p>
					<p class = "hireMeText"><?php echo e($value->service2); ?></p>
					<p class = "hireMeText"><?php echo e($value->service3); ?></p>
					<p class = "hireMeText"><?php echo e($value->service4); ?></p>
					<hr>
					<div id="wrapperButton">
					<input type="button" name="contactUs" value = "Contact US" class = "button" onclick="location.href = 'contactMe'">
				    </div>
				<?php endif; ?>	
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
			
		</div>
	</div>


	<button class = "buttNavigatorHireMe" onclick="location.href = 'indexGuest'"><img src = "<?php echo e(asset('images/arrow.jpg')); ?>" alt = "arrow" class = "buttonImage"></button>


</body>
</html>


<?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/hireMe.blade.php ENDPATH**/ ?>