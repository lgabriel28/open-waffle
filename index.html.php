<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OpenWaffle - Claim your Waffle</title>

<!-- <script type="text/javascript" language="javascript" src="include/js/report_management.js"></script>  -->
<script type="text/javascript" language="javascript" src="include/js/jquery-1.11.0.min.js"></script>
<link href="include/css/style.css" type="text/css" rel="stylesheet"></link>


</head>
<body>

<!-- http://cssdeck.com/labs/amazing-css3-login-form -->
<div id="wrapper">

	<div class="logo-image"><img border="0" src="include/img/logo.png" alt="WaffleSquad" width="440" height="302"></div>
	
	<form name="login-form" class="login-form" action="" method="post">
	
		<div class="header">
		<h1>Reserve your free waffle</h1>
			<span>Help the OpenTable's Waffle Squad keep track of their inventory and waffle production.</span>
		</div>
	    
		<div class="content">
			<input name="email" id="email" type="text" class="input email" placeholder="OpenTable Email*" />
			<div class="user-icon"></div>
			
			<select name="qty" class="input user-info">
			  <option value="0">Waffle Qty*</option>
			  <option value="1">One</option>
			  <option value="2">Two</option>
			  <option value="3">Three</option>
			  <option value="4">...Four</option>
			</select>
			<br>
			<select name="event" class="input user-info">
				<option value="0">Event*</option>
			  <option value="japanes">Japanese Waffle - 4/23/2014</option>
			</select>
			
			<input name="request" type="text" class="input user-info" placeholder="Special Request" />
			
<!-- 			<input name="password" type="password" class="input password" placeholder="Password" /> -->
<!-- 			<div class="pass-icon"></div>		 -->
			
		</div>

		<div class="footer">
<!-- 			<button id="submit" class="submit_button" type="button" value="Save">Save</button> -->
			<input type="button" name="submit" value="Feed Me" class="button" onclick="saveEventReso(); />
			<input type="submit" name="submit" value="Claim your waffle" class="register" />
		</div>
	
	</form>

</div>
<!-- <div class="gradient"></div> -->
</body>

</html>