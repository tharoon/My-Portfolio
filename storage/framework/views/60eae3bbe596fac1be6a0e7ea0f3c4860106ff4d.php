<html>
<head>
<title>Home Page</title>
<link rel = "stylesheet" type = "text/css" href = "<?php echo e(asset('css/portfolio.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style = "background-image:url(<?php echo e(asset('images/homepage_background.jpg')); ?>); background-size: cover;
background-repeat: no-repeat; filter:">


<div>

<!-- onclick="document.getElementById('id02').style.display='block'" -->

</div>

<div class = "wrapper">
<div class ="sidebar">
 <h2><img src = "<?php echo e(asset('images/logo.jpg')); ?>" alt = "logo" style="width:150px;height:150px"></h2>
 <h4>Tharoon T Thiagarajan</h4>
 <ul>
  <li><a href = "#">HOME</a></li>
  <li><a href = "<?php echo e(url('aboutMe')); ?>">ABOUT</a></li>
  <li><a href = "<?php echo e(url('skills')); ?>">SKILLS</a></li>
  <li><a href = "<?php echo e(url('resume')); ?>">RESUMES</a></li>
  <li><a href = "<?php echo e(url('portfolio')); ?>">PORTFOLIO</a></li>
  <li><a href = "<?php echo e(url('blog')); ?>">BLOG</a></li>
  <li><a href = "<?php echo e(url('reference')); ?>">REFERENCES</a></li>
  <li><a href = "<?php echo e(url('hireMe')); ?>">HIRE ME</a></li>
  <li><a href = "<?php echo e(url('contactMe')); ?>">CONTACT</a></li>
  <li><a href = "<?php echo e(url('admin')); ?>">EDIT PANEL</a></li>
  <!-- <li><a href = "#"  onclick = "openForm1()" style="width:auto;">LOG IN</a></li>
  <li><a href = "#"  onclick = "openForm()" style="width:auto;">SIGN UP</a></li> -->

  <div class = "sideBarFooter">

    <p style = "font-size: .70em; font-style: italic;">&copy; DiazApps ALL RIGHTS<br>
     RESERVED BY <span style="color: #751aff;">Tharoon T<br>
     Thiagarajan</span>
   </p>
 </div>


</ul>
</div>

<!-- onclick="document.getElementById('id01').style.display='block'" -->








<div class = "indexmain_content">
<p><font size="6">HELLO I'M</font><br>
  <font size="8"><strong>THAROON T THIAGARAJAN</strong></font><br>
  <font size="6">SOFTWARE DEVELOPER|</font><br>


  <button class = "indexbutton" style = "font-family: roboto;">Download My CV<i class="fa fa-download"></i></button> 





</p>



</div> 















</div>

<div id="myForm" class="modal">
<form class="modal-content" action="" method = "POST" onsubmit="">
  <div class="signUpcontainer">
    <span onclick="closeForm()" class="close" title="Close Modal">&times;</span>
    <p style = "color:#000033;">Check in</p>
    <hr class = "hrTop">
    <div>
     <table height = "55%" class = "signUpTable">
      <tr>
       <td><label for="name"><b>Name:</b></label></td><br>
     </tr>
     <tr>
       <td><input type="text" placeholder="" name="name" class = "signUpinputSize" id = "name" size="40" maxlength = "40" required pattern="[A-Za-z]{1,32}" title = "Name should contain characters only"></td>
     </tr>


     <tr>
       <td><label for="lastName"><b>Last Name:</b></label></td><br>
     </tr>
     <tr>
       <td><input type="text" placeholder="" name="lastName" class = "signUpinputSize" id = "lastName" size="40" maxlength = "40" required pattern="[A-Za-z]{1,32}" title = "Last Name should contain characters only"></td>
     </tr>


     <tr>
       <td><label for="email"><b>Email:</b></label><td>
       </tr>
       <tr>
         <td><input type="email" placeholder="" name="email" class = "signUpinputSize" id = "email" size="50" maxlength = "80" required></td>
       </tr>


       <tr>
         <td><label for="user"><b>User:</b></label><td>
         </tr>
         <tr>
           <td><input type="text" placeholder="" name="username" class = "signUpinputSize" id = "username" size="40" maxlength = "40" required pattern="[A-Za-z]{1,32}" title = "Username should contain characters only"></td>
         </tr>



         <tr>
           <td><label for="psw"><b>Password:</b></label></td>
         </tr>
         <tr>
          <td><input type="password" placeholder="" name="password" class = "signUpinputSize" id = "password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Password should contain 1 uppercase, 1 lowercase, 1 number and should be minimum 8 characters"></td>
         </tr>


         <tr>
           <td><label for="psw-repeat"><b>Repeat Password:</b></label></label></td>
         </tr>
         <tr>
           <td><input type="password" placeholder="" name="rPassword" class = "signUpinputSize" id = "repeatPassword" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Retype Password should contain 1 uppercase, 1 lowercase, 1 number and should be minimum 6 characters"></td>
         </tr>
       </table>
     </div>


     <div>
       <hr class = "hrbottom">
     </div>
     <input type="submit" class="signupbtn" value = "Save" onclick="return validateSignUp()">
     <!-- For Php
       <input type="submit" class="signupbtn" value = "Save"> -->
       <input type="button"  class="cancelbtn" onclick="closeForm()" value = "Close">
       <!-- onclick="document.getElementById('id01').style.display='none'" -->



     </div>
   </form>
 </div>




 <div id="myForm1" class="loginmodal">
  <form class="loginmodal-content" action="" onsubmit="">
    <div class="logincontainer">
      <span onclick="closeForm1()" class="close" title="Close Modal">&times;</span>
      <p style = "color:#000033;">Log in</p>
      <hr class = "hrTop">
      <div>
        <table height = "20%" class = "loginTable">


          <tr>
           <td><label for="username"><b>User:</b></label></td><br>
         </tr>
         <tr>
           <td><input type="text" placeholder="" name="username" id = "loginUsername" class = "signUpinputSize" size="40" maxlength = "40" required="" pattern="[A-Za-z]{1,32}" title = "Username should contain characters only"></td>
         </tr>



         <tr>
           <td><label for="psw"><b>Password:</b></label></td>
         </tr>
         <tr>
           <td><input type="password" placeholder="" name="password" id = "loginPassword" class = "signUpinputSize" size="40" maxlength = "40" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="Password should contain 1 uppercase, 1 lowercase, 1 number and should be minimum 8 characters"></td>
         </tr>

       </table>
     </div>

     <div>
       <hr class = "hrbottom">
     </div>

     <button type="submit" class="signupbtn" onclick="return validateLogin()">Get in</button>
     <button type="button" onclick="closeForm1()" class="cancelbtn">Close</button>

   </div>
 </form>
</div>































<script type="text/javascript">
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


function openForm1() {
  document.getElementById("myForm1").style.display = "inline-block";
}

function closeForm1() {
  document.getElementById("myForm1").style.display = "none";
}


function validateSignUp(){
  var name = document.getElementById("name").value;
  var lastName = document.getElementById("lastName").value;
  var email = document.getElementById("email").value;
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var repeatPassword = document.getElementById("repeatPassword").value;
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


  if(lastName.length == 0){
    window.alert("Please enter your Last name");
    lastName.focus();
    ++count;
    return false;
  }
  if(!lastName.match(/^[A-Za-z]*$/)){
    window.alert("Last Name should be only text");
    lastName.focus();
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
    window.alert("Invalid Email format");
    email.focus();
    ++count;
    return false;
  }


  if(username == 0){
    window.alert("Please enter your username");
    username.focus();
    ++count;
    return false;
  }

  if(username.length<3 || username.length>10){
    window.alert("Username can be only between 3 and 10 characters");
    username.focus();
    ++count;
    return false;
  }

  if(password == 0){
    window.alert("Please enter your password");
    password.focus();
    ++count;
    return false;
  }

  if (!(password.match(/[a-z]/g) && password.match( /[A-Z]/g) && password.match(/[0-9]/g) && password.match(/[^a-zA-Z\d]/g) && password.length >= 8)){

    window.alert("Password Should be atleast 8 characters and should contain 1 upper, 1 Lower and 1 Symbol");
    password.focus();
    count = count + 1;
    return false;
  }

  if(repeatPassword == 0){
    window.alert("Please enter your Repeat password");
    repeatPassword.focus();
    count = count + 1;
    return false;
  }

  if(repeatPassword != password){
    window.alert("Password did not match");
    repeatPassword.focus();
    count = count + 1;
    return false;

  }

  if(count === 0){
    window.alert("Submitted Successfully");

  }
}

function validateLogin(){

  var username = document.getElementById("loginUsername").value;
  var password = document.getElementById("loginPassword").value;


  if(username == 0){
    window.alert("Please enter your username");
    username.focus();
    count = count + 1;
    return false;
  }


  if(username.length<3 || username.length>10){
    window.alert("Username can be only between 3 and 10 characters");
    username.focus();
    ++count;
    return false;
  }


  if(password == 0){
    window.alert("Please enter your password");
    password.focus();
    count = count + 1;
    return false;
  }


  if(password == 0){
    window.alert("Please enter your password");
    password.focus();
    ++count;
    return false;
  }

  if (!(password.match(/[a-z]/g) && password.match( /[A-Z]/g) && password.match(/[0-9]/g) && password.match(/[^a-zA-Z\d]/g) && password.length >= 8)){

    window.alert("Password Should be atleast 8 characters and should contain 1 upper, 1 Lower and 1 Symbol");
    password.focus();
    count = count + 1;
    return false;
  }



 





}

 function loginPop(){
    window.alert("Please Login or SignUp");
  }
</script>
















</body>
</html><?php /**PATH C:\xampp\htdocs\Laravel\Thiagarajan_Portfolio\resources\views/pages/indexAdmin.blade.php ENDPATH**/ ?>