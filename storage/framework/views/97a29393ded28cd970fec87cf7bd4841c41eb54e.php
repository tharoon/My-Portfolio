<html>
<head>
	<title>User</title>
		<link rel = "stylesheet" type = "text/css" href = "<?php echo e(asset('css/portfolio.css')); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body>
	<div class="headBox">
		<hr>
		<p class = "hireMeheaderBox">DELETE RESUME</p>
		<hr>
	</div>

	<form action="<?php echo e(url('deleteResume')); ?>" method="post">
		<?php echo e(csrf_field()); ?>

		<input type="text" name = "box" id = "username" class = "inputSize" placeholder="Resume Box Number" ><br>
		<br>

		<input type="submit" value = "Delete" class = "buttonContactMe" name = "contactSubmit" onclick = "">

			</form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/resumeDelete.blade.php ENDPATH**/ ?>