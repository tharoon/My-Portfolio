<html>
<head>
	<title>Admin</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo e(asset('css/portfolio.css')); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body>
	<div class="headBox">
		<hr>
		<p class = "hireMeheaderBox">ADMIN</p> 
		<hr>
	</div>


	<div style = "list-style-type: none;">
		<li><a href = "<?php echo e(url('personalInformationAdmin')); ?>" class = "adminButton">Personal Information</a></li>
		<li><a href = "<?php echo e(url('aboutMeAdmin')); ?>" class = "adminButton">About Me</a></li>
		<li><a href = "<?php echo e(url('resumeAdminHome')); ?>" class = "adminButton">Resume</a></li>
		<li><a href = "<?php echo e(url('userHomePage')); ?>" class = "adminButton">Users</a></li>
		<li><a href = "<?php echo e(url('hireMeHome')); ?>" class = "adminButton">Hire Me</a></li>
		<li><a href = "<?php echo e(url('portfolioHomePage')); ?>" class = "adminButton">Portfolio</a></li>
		<li><a href = "<?php echo e(url('referencesHome')); ?>" class = "adminButton">Reference</a></li>
		<li><a href = "<?php echo e(url('skillsHomeAdmin')); ?>" class = "adminButton">Skills</a></li>
	</div>


</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/admin.blade.php ENDPATH**/ ?>