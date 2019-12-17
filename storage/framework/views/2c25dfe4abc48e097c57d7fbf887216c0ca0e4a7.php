<html>
<head>
	<title>Resume</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo e(asset('css/portfolio.css')); ?>">
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
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($value->box == 'box1'): ?>
					<div class = "arrowBox1"><?php echo e($value->company_name); ?></div>
					<div class = "arrowBox11"><?php echo e($value->designation); ?></div>
				<?php endif; ?>	
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($value->box == 'box2'): ?>	
					<div class = "arrowBox2"><?php echo e($value->company_name); ?></div>
					<div class = "arrowBox21"><?php echo e($value->designation); ?></div>
				<?php endif; ?>	
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	

			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($value->box == 'box3'): ?>
					<div class = "arrowBox3"><?php echo e($value->company_name); ?></div>
					<div class = "arrowBox31"><?php echo e($value->designation); ?></div>
				<?php endif; ?>	
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>			


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
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($value->box == 'box4'): ?>
					<div class = "arrowBox4"><?php echo e($value->company_name); ?></div>
					<div class = "arrowBox41"><?php echo e($value->designation); ?></div>
				<?php endif; ?>	
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php if($value->box == 'box5'): ?>
					<div class = "arrowBox5"><?php echo e($value->company_name); ?></div>
					<div class = "arrowBox51"><?php echo e($value->designation); ?></div>
				<?php endif; ?>	
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


		</div>

	</div>
	<button class = "buttNavigatorResume" onclick="location.href = 'indexGuest'"><img src = "<?php echo e(asset('images/arrow.jpg')); ?>" alt = "arrow" class = "buttonImage"></button>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/resume.blade.php ENDPATH**/ ?>