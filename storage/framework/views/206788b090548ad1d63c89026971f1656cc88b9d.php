  <!DOCTYPE html>
  <html>
  <head>
    <title>Contact Me</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo e(asset('css/portfolio.css')); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script type="text/javascript">

      function validateContactMe(){


        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var message = document.getElementById("message").value;
        var count = 0;

        if(name.length == 0){
          window.alert("Please enter your name");
          name.focus();
          ++count;
          return false;
        }
        if(!name.match(/^[A-Za-z]*$/)){
          window.alert("Name should be only text");
          name.focus();
          ++count;
          return false;
        }

        if(email == 0){
          window.alert("Please enter your Email");
          email.focus();
          ++count;
          return false;
        }
        if(!email.match(/^(.+)@([^\.].*)\.([a-z]{2,})$/)){
          window.alert("Please enter a valid Email ID");
          email.focus();
          ++count;
          return false;
        }

          if (email.indexOf("@",0)<0)
        {
           window.alert("Please enter a valid email");
           email.focus();
           ++count;
           return false;
        }
        if (email.indexOf(".",0)<0)
        {
           window.alert("Please enter a valid email");
           email.focus();
           ++count;
           return false;
        }

        if(phone.length == 0){
          window.alert("Please enter your phone number");
          phone.focus();
          ++count;
          return false;
        }

        if(!phone.match(/^\d{10}$/)){
          window.alert("Please enter a valid 10 digit phone number");
          phone.focus();
          ++count;
          return false;
        }

        if(message.length == 0){
          window.alert("Please enter your message");
          message.focus();
          ++count;
          return false;
        }
        if(message.length <=5 || message.length>50){
          window.alert("Message should be between 5 and 50 characters");
          message.focus();
          ++count;
          return false;
        }

        if(count == 0){
          window.alert("Submitted Successfully");

        }




      }
    </script>

  </head>
  <body>
    <div id="container">
      <div id="header">
        <div class="headBox">
          <hr>
          <p class = "hireMeheaderBox">CONTACT ME</p> 
          <hr>
        </div>
      </div>


      <div id="content">
        <div id="columns-container">
          <div class="column column-a">
            <p class = "h2ContactMe">CONTACT ADDRESS</p>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <table height = "50%" style="border-spacing: 25px;">
              <tr>
                <td>
                  <img src = "<?php echo e(asset('images/locationContactMe.jpg')); ?>" alt = "location" style="width:30px;height:30px">
                </td>
                <td>
                  <b>Address</b>: <?php echo e($value->address); ?>

                </td>
              </tr>


              <tr>
                <td>
                  <img src = "<?php echo e(asset('images/contactContactMe.jpg')); ?>" alt = "phone" style="width:30px;height:30px">
                </td>
                <td>
                  <b>Phone</b>: <?php echo e($value->phone_number); ?></td>
                </tr>
                <tr>
                  <td>
                    <img src = "<?php echo e(asset('images/whatsappContactMe.jpg')); ?>" alt = "whatsapp" style="width:30px;height:30px">
                  </td>
                  <td>
                    <b>Whatsapp</b>: <?php echo e($value->whatsapp_number); ?></td>
                  </tr>
                  <tr>
                    <td>
                      <img src = "<?php echo e(asset('images/skypeContactMe.jpg')); ?>" alt = "skype" style="width:30px;height:30px">
                    </td>
                    <td>
                      <b>Skype</b>: <?php echo e($value->skype_id); ?></td>
                    </tr>
                    <tr>
                      <td><img src = "<?php echo e(asset('images/mailContactMe.jpg')); ?>" alt = "mail" style="width:30px;height:30px"></td>
                      <td>
                        <b>Email</b>: <span style="color: #1a1aff"><?php echo e($value->email); ?></span></td>
                      </tr>
                      <tr>
                        <td>
                          <img src = "<?php echo e(asset('images/homeContactMe.jpg')); ?>" alt = "Website" style="width:30px;height:30px">
                        </td>
                        <td>
                          <b>Website</b>: <span style="color: #1a1aff">www.tcube.com</span></td>
                        </tr>
                      </table>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                      <p style="margin-left: 20px; margin-top: 2px;">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-linkedin"></a>
                        <a href="#" class="fa fa-twitter"></a>
                        <a href="#" class="fa fa-pinterest"></a>
                        <a href="#" class="fa fa-snapchat"></a>
                      </p>


                    </div>



                    <div class="column column-b">
                     <p class = "h2LetsFun">LET'S HAVE A FUN</p>

                     <table style="height: 70%;">
                      <?php if(count($errors) > 0): ?>
                      <div class = "alert alert-danger">
                        <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                              <li><?php echo e($error); ?></li>
                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                        </ul>
                      </div>
                      <?php endif; ?>
                      <?php if(\Session::has('success')): ?>
                      <div class = "alert alert-success">
                        <p><?php echo e(\Session::get('success')); ?></p>

                      </div>

                      <?php endif; ?>
                      <form name = "contactMe" action = "<?php echo e(url('contactMe')); ?>" method="POST" >
                        <?php echo e(csrf_field()); ?>

                        <!-- onsubmit=" return validateContactMe()" -->
                        <tr>
                          <td></td><br>
                        </tr>
                        <tr>
                          <td><input type="text" name="name" id = "name" class = "inputSize" placeholder="Your Name" size="40" maxlength = "40" required pattern="[A-Za-z]{1,32}" title = "Name should contain characters only"></td>
                        </tr>
                        <tr>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="email" name = "email" id = "email" class = "inputSize" placeholder="Email" required></td>
                        </tr>
                        <tr>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="tel" name = "phone" id = "phone" class = "inputSize" placeholder="Phone" size="10" pattern="^\d{10}$" title="Phone number should be a valid 10 digit number" maxlength = "20" required></td>
                        </tr>
                        <tr>
             <!--    <td>Your Message</td>
             </tr> -->
             <tr>
              <td><textarea class = "inputSize" name = "message" rows="7" cols="200" placeholder="Your Message" id = "message" size="500" maxlength = "500"required title="Message should be between 5 and 20 characters"></textarea>
              </td>
            </tr>
            <tr>
              <td>
                <!-- <input type="button" value = "Send Now" class = "buttonContactMe" name = "contactSubmit" onclick = "return validateContactMe()"> -->
                <input type="submit" value = "Send Now" class = "buttonContactMe" name = "contactSubmit">

                <!-- For php -->
                 <!-- <input type="submit" value = "Send Now" class = "buttonContactMe" name = "contactSubmit">-->
              </td>
            </tr>
          </form>
        </table>

        <p id = "contactMessage"></p>
        <button class = "buttNavigatorContact" onclick="location.href = 'indexGuest'"><img src = "<?php echo e(asset('images/arrow.jpg')); ?>" alt = "arrow" class = "buttonImage"></button>
      </div>







    </div>
  </div>
</div>






</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/contactMe.blade.php ENDPATH**/ ?>