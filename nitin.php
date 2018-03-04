<html>
<head>
<script src="javascript files/jquery.min.js"></script>
<script src="javascript files/bootstrap.min.js"></script>
<link href="css files/bootstrap.min.css" rel="stylesheet">
<link href="css files/nitinmenustyle.css" rel="stylesheet">
</head>
<body>
<script>
$(document).ready(function(){
	setInterval(function(){
	$('#cloud2').animate({
	left:'0px'},10000).animate({left:'1090px'},10000);
	$('#cloud1').animate({
	left:'1090px'},10000).animate({left:'0px'},10000);
$('#rocket').animate({
top:'0px'},8000).animate({top:'760px'},0);
	},1000);
});
</script>
<div id="main">
<div class="container" >
	
	<img src="images/finalblackrocket.png" id="rocket">
	<img src="images/cropcloud.png" id="cloud1">
	<img src="images/cropcloud.png" id="cloud2">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					                        
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>HELP</b> 
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="nitinabout.php">About</a>
							</li>
							
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="nitinregistarmodal.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
					</li>
					<li>
					<a href="nitinmodal.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
</div>
</div>