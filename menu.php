<meta charset="utf-8">
<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/full-slider.css" rel="stylesheet">
<link href="navbar.css" rel="stylesheet">
<script src="../../assets/js/ie-emulation-modes-warning.js"></script>
<style type="text/css">
#img{
	border-radius: 10px;
}
#footer{
	background-color: blue;
	text-align: right;
}
.large2{
	height: 50px;
	width: auto;
	   }
#textshadow{
  text-shadow:3px 3px 4px magenta;
}
#brandshadow{
  text-shadow:3px 3px 4px #fff;
}
</style>
<html>
<head><title>Home |Highway Bus Line Ticket Sale System</title></head>
<body>
<?php
    session_start();
	if( !isset($_SESSION['id'])){
		header("location:admin.php");
	}?>
				<div class="col-md-12 large2"></div>
<div id="page-wapper" class="container-fluid back">
	<div class="col-md-12" align="right"><?php echo date("j-n-Y");?></div>
	<div class="col-md-2">
				<img id="img" src="express.jpg" class="img-responsive">
			</div>
			<div class="col-md-10">
				<h1 id="textshadow"><font color="#c0c0c0"><b><i>Highway Bus Line Ticket Sale System</i></b></font></h1>
			</div>
			<div class="col-md-12">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="col-md-12 large2"></div>
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="home.php" class="navbar-brand" id="brandshadow"><font color="blue"><b>Highway</b></font></a>

			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="navbar-collapse collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li class="active"><a href="home.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="logout.php">Logout</a></li>
				<li><a href="#" onClick="window.print()">Print</a></li>
			</ul>
		</div>
	</div>
</nav>		
</div>