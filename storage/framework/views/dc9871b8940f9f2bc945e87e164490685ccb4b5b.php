<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Personal Information</title>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo e(asset('css/portfolio.css')); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body>
	<div class="headBox">
		<hr>
		<p class = "hireMeheaderBox">Reference</p> 
		<hr>
	</div>

<p><h1>Update Here</h1></p>	

<table style="height: 70%;">
                      <form name = "contactMe" action = "<?php echo e(url('updateReference')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <tr>
                          <td></td><br>
                        </tr>
                        <tr>
                          <td><input type="text" name = "name" id = "name" class = "inputSize" placeholder="name"></td>
                        </tr>
                        <tr>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="designation" name = "designation" id = "designation" class = "inputSize" placeholder="Designation"></td>
                        </tr>
                        <tr>
                          <td></td>
                        </tr>
                        <tr>
             <!--    <td>Your Message</td>
             </tr> -->
             <tr>
              <td><input type="text" name="description" id = "description" class = "inputSize" placeholder="description">
              </td>
            </tr>
             <tr>
                          <td></td>
                        </tr>
             <tr>
              <td><input type="text" name="box" id = "box" class = "inputSize" placeholder="box">
              </td>           
            <tr>
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
</html><?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/referenceUpdate.blade.php ENDPATH**/ ?>