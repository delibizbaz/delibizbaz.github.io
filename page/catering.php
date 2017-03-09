<!DOCTYPE html>
<html>
<head>
	<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  

	<link rel="stylesheet" href="../bootstrap.css">
	<link rel="stylesheet" href="../stylesheet.css">
	<title>Deli Biz Baz - Menu</title>
</head>

<body>
<div class="nav">
	<div class="container">
		<a href="../home.html"><img class="pull-left" src="../img/logo.jpg"></a>
		<ul class="pull-left">
			<li><a href="../home.html">Home</a></li>
            <li><a href="./menu.html">Menu</a></li>
            <li><a href="./catering.html">Catering</a></li>
		</ul>
		<ul class="pull-right">
			<li><a href="../home.html#footer">Contact Info</a></li>
		</ul>
	</div>
</div>

<div class="jumbotron">
	<div class="container">
		<h1>Deli Biz Baz</h1>
			<p>Eat in <strong>"clean environment,"</strong>
            <br>Enjoy <strong>"healthy food," &amp;</strong>
            <br>Wait for <strong>"quick service"</strong></p>
			<p></p>
        <a href="https://www.facebook.com/delibizbaz" target="_blank">View Weekly Menu on FB!</a>
	</div>
</div>
	
<div class="container-fluid dark" id="catering">
    <div class="container">
        <div class="row">
      		<h3> CATERING : TEST (not complete yet)</h3>


			<?php
			// Initial form
			if ($_REQUEST[current] != 1) {
			?>
			
			<h2>Morning Sets</h2>
			<form method=POST><input type=hidden name=current value=1>
			<table border=1>
			<tr><td>Email Address</td><td><input name=email size=4></td></tr>
			<tr><td>Continental Breakfast</td><td><input name=continental size=4></td></tr>
			<tr><td>Morning Sandwich Set</td><td><input name=sandwich size=4></td></tr>
			<tr><td>Fruit Trays</td><td><input name=fruit size=4></td></tr>
			<tr><td>&nbsp;</td><td><input type=submit value="Inquire"></td></tr>
			</table></form>
			
			<?php
			} else {
			
			// handling results
			echo "The total price will be mailed to you shortly. Thank you for visiting Deli Biz Baz!";
			
			?>
			<br>
			Please click <a href=?>here</a> to rerun the price.
			<br>
			<?php } ?>
	
	    </div>
	</div>
</div>
	
	<br>
	<br>
	
<footer class="row" id="footer">
    <p><small>Deli Biz Baz &copy; 2014 All Rights Reserved.</small></p>
</footer>
</body>
</html>
