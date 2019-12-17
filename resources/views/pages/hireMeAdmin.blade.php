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
		<p class = "hireMeheaderBox">Hire Me</p> 
		<hr>
	</div>
<h1> Update Here</h1>
	<table style="height: 70%;">
		<form name = "contactMe" action = "{{ url('hireMeUpdate')}}" method="post">
			{{csrf_field()}}
			<tr>
				<td></td><br>
			</tr>
			<tr>
				<td><input type="text" name="amount" id = "amount" class = "inputSize" placeholder="Amount">
				</td>
			</tr>
			<tr>
				<td><input type="text" name = "service" id = "service" class = "inputSize" placeholder="Service"></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td><input type="text" name = "box" id = "box" class = "inputSize" placeholder="Box"></td>
			</tr>
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

