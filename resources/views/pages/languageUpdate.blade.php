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
		<p class = "hireMeheaderBox">LANGUAGE</p> 
		<hr>
	</div>

<p><h1>Update Here</h1></p>	

<table style="height: 70%;">
	<form name = "contactMe" action = "{{ url('updateLanguage')}}" method="post">
                         {{csrf_field()}}
                        <tr>
                          <td></td><br>
                        </tr>
                        <tr>
                          <td><input type="text" name = "languagesKnown" id = "languagesKnown" class = "inputSize" placeholder="Language Known"></td>
                        </tr>
                        <tr>
                          <td></td>
                        </tr>
                        <tr>
                          <td><input type="text" name = "languagesRating" id = "languagesRating" class = "inputSize" placeholder="Language Rating"></td>
                        </tr>
                        <tr>
                          <td></td>
                        </tr>
             <!--    <td>Your Message</td>
             </tr> -->
             <tr>
                          <td></td>
                        </tr>
             <tr>
              <td><input type="text" name="box" id = "box" class = "inputSize" placeholder="Box Number">
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