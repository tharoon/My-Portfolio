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
		<p class = "hireMeheaderBox">INSERT HIRE ME</p> 
		<hr>
	</div>

<p><h1>Insert Here</h1></p>	

<table style="height: 70%;">
                      <form name = "contactMe" action = "{{ url('hireMeInsert')}}" method="post">
                        {{csrf_field()}}
                        <tr>
                          <td></td><br>
                        </tr>
                        <tr>
                          <td><input type="text" name = "amount" id = "amount" class = "inputSize" placeholder="Amount"></td>
                        </tr>
                        <tr>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="text" name = "mainservice" id = "phoneNumber" class = "inputSize" placeholder="Main Service"></td>
                        </tr>
                        <tr>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="text" name = "service1" id = "whatsapp" class = "inputSize" placeholder="Service 1"></td>
                        </tr>
                        <tr>
             <!--    <td>Your Message</td>
             </tr> -->
             <tr>
              <td><input type="text" name="service2" id = "skype" class = "inputSize" placeholder="Service 2">
              </td>
            </tr>
             <tr>
                          <td></td>
                        </tr>
             <tr>
              <td><input type="text" name="service3" id = "email" class = "inputSize" placeholder="Service 3">
              </td>           
            <tr>
              <tr>
              <td><input type="text" name="service4" id = "email" class = "inputSize" placeholder="Service 4">
              </td>           
            <tr>
              <tr>
              <td><input type="text" name="box" id = "email" class = "inputSize" placeholder="Box Number">
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