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
		<p class = "hireMeheaderBox">CHNAGE USER ROLE</p> 
		<hr>
	</div>

	<form action="<?php echo e(url('changeUserRole')); ?>" method="post">
		<?php echo e(csrf_field()); ?>

		Username:
		<input type="text" name = "username" id = "username" class = "inputSize" placeholder="Username" ><br>
		<br>

		User Role:
		<input type="text" name = "userRole" id = "userRole" class = "inputSize" placeholder="User Role" >
		<br>

		<input type="submit" value = "Update" class = "buttonContactMe" name = "contactSubmit" onclick = "">

	</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/changeUserRole.blade.php ENDPATH**/ ?>