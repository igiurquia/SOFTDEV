<!DOCTYPE HTML>
<html>
<head>
<title>Liberpool | Booking</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Classy Booking Form  Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.12.0.min.js"></script>

<!--web-fonts-->
</head>
<body>
		<!---header--->
		<div class="header w3ls">
			<h1>Liberpool Booking Form</h1>
		</div>
		<!---header--->
		<!---main--->
			<div class="main">
				<div class="main-section agile">
					<div class="login-form">
						<form action="bookins.php" method="post">
							<ul>
								 <li class="text-info">Full Name *</li>
								 <li><input type="text" name="name" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Email *</li>
								 <li><input type="text" name="email" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							 <ul>
								 <li class="text-info">Phone Number *</li>
								 <li><input type="text" name="phone" placeholder="" required></li>
								 <div class="clear"></div>
							 </ul>
							  <ul>
								<li class="text-info">Check-in *</li>
								<li class="dat"><input class="date" name="datein" id="datepicker" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=></li>
								<li class="selec"><select class="currentTime time-dropdown form-dropdown validate[required, limitDate]" id="hour_15" name="inhour">
									<option> Hr </option>
									<option value="1"> 1 </option>
									<option value="2"> 2 </option>
									<option value="3"> 3 </option>
									<option value="4"> 4 </option>
									<option value="5"> 5 </option>
									<option value="6"> 6 </option>
									<option value="7"> 7 </option>
									<option value="8"> 8 </option>
									<option value="9"> 9 </option>
									<option value="10"> 10 </option>
									<option value="11"> 11 </option>
									<option value="12"> 12 </option>
								  </select>
								  <select class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="inmin">
									<option>  Min</option>
									<option value="00"> 00 </option>
									<option value="10"> 10 </option>
									<option value="20"> 20 </option>
									<option value="30"> 30 </option>
									<option value="40"> 40 </option>
									<option value="50"> 50 </option>
								  </select>
								  <select class="time-dropdown form-dropdown validate[required, limitDate]" id="ampm_15" name="inpm">
									<option value="AM"> AM </option>
									<option value="PM"> PM </option>
								  </select></li>
								<div class="clear"></div>
							</ul>
							<ul>
								<li class="text-info">Check-out *</li>
								<li class="dat"><input class="date" name="dateout" id="datepicker1" type="text" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=></li>
								<li class="selec"><select class="currentTime time-dropdown form-dropdown validate[required, limitDate]" id="hour_15" name="outhour">
									<option> Hr </option>
									<option value="1"> 1 </option>
									<option value="2"> 2 </option>
									<option value="3"> 3 </option>
									<option value="4"> 4 </option>
									<option value="5"> 5 </option>
									<option value="6"> 6 </option>
									<option value="7"> 7 </option>
									<option value="8"> 8 </option>
									<option value="9"> 9 </option>
									<option value="10"> 10 </option>
									<option value="11"> 11 </option>
									<option value="12"> 12 </option>
								  </select>
								  <select class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="outmin">
									<option>  Min</option>
									<option value="00"> 00 </option>
									<option value="10"> 10 </option>
									<option value="20"> 20 </option>
									<option value="30"> 30 </option>
									<option value="40"> 40 </option>
									<option value="50"> 50 </option>
								  </select>
								  <select class="time-dropdown form-dropdown validate[required, limitDate]" id="ampm_15" name="outpm">
									<option value="AM"> AM </option>
									<option value="PM"> PM </option>
								  </select></li>
								<div class="clear"></div>
							</ul>
										<link rel="stylesheet" href="css/jquery-ui.css" />
										<script src="js/jquery-ui.js"></script>
											<script>
												$(function() {
												$( "#datepicker,#datepicker1" ).datepicker();
												});
											</script>
							<input type="submit" value="Submit">
							<div class="clear"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="footer w3agile">
			<p>&copy Liberpool . All rights reserved 
		</div>
</body>
</html>