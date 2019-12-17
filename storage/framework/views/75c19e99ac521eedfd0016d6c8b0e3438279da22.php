<html>
<head>
	<title>Reference</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo e(asset('css/portfolio.css')); ?>">
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
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          			<?php if($value->box == 'box4'): ?>
						<h5 class = "referenceNameBottom"><?php echo e($value->firstname); ?></h5><br>
						<p class = "referenceRoleBottom1"><?php echo e($value->designation); ?></p>
						<p class = "referenceMessageBottom"><?php echo e($value->description); ?><!-- "As always, great creative thinking for the best solution.<br>
						<span style = "margin-left: 20px;">Luiis Miguel is by far the most professional and</span> <br><span style = "margin-left: 10px;">knowledgeable provider I worked with. I will hire him</span><br> <span style = "margin-left: 120px;margin-top: 10px;">again :)"</span>. -->
						<div>		
						<img src = "<?php echo e(asset('images/kyss.jpg')); ?>" alt = "profile picture" class = "referenceImage1">
						</div>
					<?php endif; ?>
      			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				

			
		</div>

		<div class = "referenceBoxTop">
			<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          		<?php if($value->box == 'box1'): ?>
					<h5 class = "referenceName"><?php echo e($value->firstname); ?></h5><br>
						<p class = "referenceRole1"><?php echo e($value->designation); ?></p>
						<p class = "referenceMessage"><?php echo e($value->description); ?><!-- "As always, great creative thinking for the best solution.<br>
							<span style = "margin-left: 20px;">Luiis Miguel is by far the most professional and</span> <br><span style = "margin-left: 10px;">knowledgeable provider I worked with. I will hire him</span><br> <span style = "margin-left: 120px;margin-top: 10px;">again :)"</span>. -->
						<div>		
						<img src = "<?php echo e(asset('images/joe.jpg')); ?>" alt = "profile picture" class = "referenceImage2"> 
						</div>
				<?php endif; ?>
      		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
		</div>
			

		</div>

		<div class="reference_column">
			<div class = "referenceBoxBottom">
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          			<?php if($value->box == 'box5'): ?>
						<h5 class = "referenceNameBottom"><?php echo e($value->firstname); ?></h5><br>
						<p class = "referenceRoleBottom1"><?php echo e($value->designation); ?></p>
						<p class = "referenceMessageBottom"><?php echo e($value->description); ?><!-- "As always, great creative thinking for the best solution.<br>
							<span style = "margin-left: 20px;">Luiis Miguel is by far the most professional and</span> <br><span style = "margin-left: 10px;">knowledgeable provider I worked with. I will hire him</span><br> <span style = "margin-left: 120px;margin-top: 10px;">again :)"</span>. -->
						<div>		
						<img src = "<?php echo e(asset('images/carhil.jpg')); ?>" alt = "profile picture" class = "referenceImage3"> 
						</div>
					<?php endif; ?>
      			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	

			
		</div>


			<div class = "referenceBoxTop">
				<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          			<?php if($value->box == 'box2'): ?>
						<h5 class = "referenceName"><?php echo e($value->firstname); ?></h5><br>
						<p class = "referenceRole1"><?php echo e($value->designation); ?></p>
						<p class = "referenceMessage"><?php echo e($value->description); ?><!-- "As always, great creative thinking for the best solution.<br>
						<span style = "margin-left: 20px;">Luiis Miguel is by far the most professional and</span> <br><span style = "margin-left: 10px;">knowledgeable provider I worked with. I will hire him</span><br> <span style = "margin-left: 120px;margin-top: 10px;">again :)"</span>. -->
						<div>		
						<img src = "<?php echo e(asset('images/rosy.jpg')); ?>" alt = "profile picture" class = "referenceImage4"> 
						</div>
					<?php endif; ?>
      			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
			</div>
			




		</div>


		<div class="reference_column">
				<div class = "referenceBoxBottom">
					<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          				<?php if($value->box == 'box6'): ?>
							<h5 class = "referenceNameBottom"><?php echo e($value->firstname); ?></h5><br>
							<p class = "referenceRoleBottom1"><?php echo e($value->designation); ?><p>
							<p class = "referenceMessageBottom"><?php echo e($value->description); ?><!-- "As always, great creative thinking for the best solution.<br>
							<span style = "margin-left: 20px;">Luiis Miguel is by far the most professional and</span> <br><span style = "margin-left: 10px;">knowledgeable provider I worked with. I will hire him</span><br> <span style = "margin-left: 120px;margin-top: 10px;">again :)"</span>. -->
							<div>
							<img src = "<?php echo e(asset('images/leo.jpg')); ?>" alt = "profile picture" class = "referenceImage5">
						<?php endif; ?>
      				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
		</div>

			
		</div>



				<div class = "referenceBoxTop">
					<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          				<?php if($value->box == 'box3'): ?>
							<h5 class = "referenceName"><?php echo e($value->firstname); ?></h5><br>
							<p class = "referenceRole1"><?php echo e($value->designation); ?></p>
							<p class = "referenceMessage"><?php echo e($value->description); ?><!-- "As always, great creative thinking for the best solution.<br>
							<span style = "margin-left: 20px;">Luiis Miguel is by far the most professional and</span> <br><span style = "margin-left: 10px;">knowledgeable provider I worked with. I will hire him</span><br> <span style = "margin-left: 120px;margin-top: 10px;">again :)"</span>. -->
							<div>		
							<img src = "<?php echo e(asset('images/yury.jpg')); ?>" alt = "profile picture" class = "referenceImage6">
						<?php endif; ?>
      				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
		</div>
		</div>





		</div>

	</div>


	<button class = "buttNavigatorResume" onclick="location.href = 'indexGuest'"><img src = "<?php echo e(asset('images/arrow.jpg')); ?>" alt = "arrow" class = "buttonImage"></button>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/reference.blade.php ENDPATH**/ ?>