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
		<p class = "hireMeheaderBox">USERS</p> 
		<hr>
	</div>

<div style = "list-style-type: none; margin-left: 10%;">

	<li><a href = "<?php echo e(url('changeUserRole')); ?>">Change user Role</a></li>
	<br>

	<li><a href = "<?php echo e(url('deleteUser')); ?>">Delete User</a></li>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/usersHomePage.blade.php ENDPATH**/ ?>