<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Personal Information</title>
	<link rel = "stylesheet" type = "text/css" href = "{{ asset('css/portfolio.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani&display=swap" rel="stylesheet">
</head>
<body>
	<div class="headBox">
		<hr>
		<p class = "hireMeheaderBox">PERSONAL INFORMATION</p> 
		<hr>
	</div>

<p><h1>Update Here</h1></p>	

<table style="height: 70%;">
                      <form name = "contactMe" action = "{{ url('updatePersonalInformation')}}" method="post">
                        {{csrf_field()}}
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
                        <tr>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="text" name = "whatsapp" id = "whatsapp" class = "inputSize" placeholder="whatsapp number"></td>
                        </tr>
                        <tr>
             <!--    <td>Your Message</td>
             </tr> -->
             <tr>
              <td><input type="text" name="skype" id = "skype" class = "inputSize" placeholder="skype">
              </td>
            </tr>
             <tr>
                          <td></td>
                        </tr>
             <tr>
              <td><input type="text" name="email" id = "email" class = "inputSize" placeholder="email">
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
</html>	