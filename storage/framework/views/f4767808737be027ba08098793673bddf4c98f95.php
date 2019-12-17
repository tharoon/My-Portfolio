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
		<p class = "hireMeheaderBox">ABOUT ME</p> 
		<hr>
	</div>

<p><h1>Update Here</h1></p>	


<table style="height: 70%;">
                      <form name = "contactMe" action = "<?php echo e(url('updateAboutMe')); ?>" method="post">
                        <?php echo e(csrf_field()); ?>

                        <tr>
                          <td></td><br>
                        </tr>
                        <tr>
                          <td><input type="text" name = "address" id = "address" class = "inputSize" placeholder="address"></td>
                        </tr>
                        <tr>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="text" name = "phoneNumber" id = "phoneNumber" class = "inputSize" placeholder="Phone Number"></td>
                        </tr>
             <!--    <td>Your Message</td>
             </tr> -->
                          <td></td>
                        </tr>
             <tr>
              <td><input type="text" name="email" id = "email" class = "inputSize" placeholder="email">
              </td>           
            <tr>
              <tr>
              <td><input type="text" name="profilePic" id = "profilePic" class = "inputSize" placeholder="Profile Picture">
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
</form><?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/aboutMeAdminPannel.blade.php ENDPATH**/ ?>