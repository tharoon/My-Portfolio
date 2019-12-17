<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Update Company</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo e(asset('css/portfolio.css')); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body>
	<div class="headBox">
		<hr>
		<p class = "hireMeheaderBox">Resume Edit Company</p> 
		<hr>
	</div>

	<table style="height: 70%;">
		<form name = "contactMe" action = "<?php echo e(url('updateCompany')); ?>" method="post">
			<?php echo e(csrf_field()); ?>

			<tr>
				<td></td><br>
			</tr>
			<tr>
				<td><input type="text" name="box" id = "box" class = "inputSize" placeholder="Box Number">
				</td>
			</tr>
			<tr>
				<td><input type="text" name = "companyName" id = "companyName" class = "inputSize" placeholder="company Name"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<!-- <tr>
				<td><input type="text" name = "designation" id = "designation" class = "inputSize" placeholder="Designation"></td>
			</tr> -->
			<tr>
				<td></td>
			</tr>
			<!-- <tr>
				<td><input type="text" name = "fromDate" id = "fromDate" class = "inputSize" placeholder="From Date"></td>
			</tr>
			<tr>
                <td>Your Message</td>
             </tr>
             <tr>
             	<td><input type="text" name="toDate" id = "toDate" class = "inputSize" placeholder="To Date">
             	</td>
             </tr> -->
             <td>
             	<input type="submit" value = "Update" class = "buttonContactMe" name = "contactSubmit" onclick = "">

             	<!-- For php -->
             	<!-- <input type="submit" value = "Send Now" class = "buttonContactMe" name = "contactSubmit">-->
             </td>
         </tr>
     </form>
 </table>
</form>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/resumeUpdateCompany.blade.php ENDPATH**/ ?>