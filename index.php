<?php
include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>myShop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles/style.css">
<style>
body {
	padding-top: 80px;
}

body {
	background: url('images/bghome.jpg');
	background-size: cover;
}
#im{
width: 1150px;
height: 500px;
}
#sidebar_title{
	font-style:bold;
	color:#FFF;
	padding:10px;
	font-size:25px;
	font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif;
	
	}
	
</style>

  
</head>




<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		


		<div class="navbar-collapse collapse" id="mainNavbar">
			<ul class="nav navbar-nav">
			
				<li id="home" ><a href="#"><span><strong class="logo" style="color: purple; font-size:25px"><b>WHITE PEARL</b> </strong>
					
						 </span></a></li>
				
				<li id="about"><a href="#about"><span
						class="glyphicon glyphicon-info-sign"><b> About Us</b></span></a></li>
				<li id="contact"><a href="#contact"><span
						class="glyphicon glyphicon-earphone"><b> Contact Us</b></span></a></li>
				<li id="listProducts"><a
					href="#show/all/products"><span
						class="glyphicon glyphicon-folder-open"><b> View Product</b></span></a></li>
			
			
			</ul>
			<form class="navbar-form navbar-left" role="search" method="get" action="result.php" enctype="multipart/form-data">
	
	<input type="text" class="form-control" placeholder="search">

	<button type="submit" class="btn btn-default">Search</button>
</form>
			<ul class="nav navbar-nav navbar-right">
			<security:authorize access="isAnonymous()">
				<li id="register"><a href="#/register"><span
						class="glyphicon glyphicon-log-in"><b> Sign Up</b></span></a>
						</li>
						
						
				<li id="login"><a href="#/login"><span
						class="glyphicon glyphicon-user"> <b>Login</b></span></a>
						
						</li>

                
		</div>
	</div>
</nav>

<body>
<div class="container">
<div class="row">

 <img src="images/header.jpg" class="img-responsive" alt="text of the image"  >
 
   </div>
</div>


 

<div class="container">
<div class="row">
<div class="col-md-2">
<div id="sidebar_title"><u>Categories</u></div>

<ul id="cats">



<?php

$get_cats = "select * from categories";
$run_cats = mysqli_query($con, $get_cats);
while($row_cats=mysqli_fetch_array($run_cats)) {
	$cat_id=$row_cats['cat_id'];
	$cat_title=$row_cats['cat_title'];
	echo "<li><a href='index.php?cat=$cat_id'>$cat_title</a></li>";
}

?>
</ul>

<div id="sidebar_title"><u>Brands</u>
</div>
<ul id="cats">

<?php

$get_brands = "select * from brands";
$run_brands = mysqli_query($con, $get_brands);
while($row_brands=mysqli_fetch_array($run_brands)) {
	$brand_id=$row_brands['brand_id'];
	$brand_title=$row_brands['brand_title'];
	echo "<li><a href='index.php?brand=$brand_id'>$brand_title</a></li>";
}

?>
</ul>

</div>
<div class="col-md-10">
	
	
	
		<div class="carousel slide" data-interval="2000" id="myCarousel">
			<ol class="carousel-indicators">
				<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
				<li data-slide-to="1" data-target="#myCarousel"></li>
				<li data-slide-to="2" data-target="#myCarousel"></li>
				<li data-slide-to="3" data-target="#myCarousel"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active" id="slide1">
					<img id= "im" src="images/bridal.jpg" class="img-responsive"
						alt="text of the image" >
					<div class="carousel-caption">
						<h4></h4>

					</div>
				</div>
				<div class="item" id="slide2">
					<img id= "im" src="images/kundan-banner-1.jpg"
						class="img-responsive" alt="text of the image">
					<div class="carousel-caption">
						<h4></h4>

					</div>
				</div>
				<div class="item" id="slide3">
					<img id= "im" src="images/cr14.jpg" class="img-responsive"
						alt="text of the image" >
					<div class="carousel-caption">
						<h4></h4>

					</div>
				</div>
				<div class="item" id="slide4">
					<img id= "im" src="images/bridal-collections-banner.png" class="img-responsive"
						alt="text of the image" >
					<div class="carousel-caption">
						<h4></h4>

					</div>
				</div>


			</div>
			<a class="left carousel-control" data-slide="prev" href="#myCarousel"><span
				class="icon-prev"></span></a> <a class="right carousel-control"
				data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
		</div>
	</div>
</div>
</div>

<!--  bootstrap cards -->
<div class="container">
	<center>
		<strong class="heading" style="color: white"><h3>Our Most Loved Pieces</h3> </strong>
	</center>
	
	<hr>
	<div class="row">
		<div class="col-md-4">
			<div class="well">
				<img src="images/White-pearl.jpg" class="img-responsive">
				<h2 class="text-justify-center" style="font-size: 17px;">Lesk
					Off-White Stone-Studded Double Chain Necklace with Earrings</h2>
				<p>The new spring/summer collection from Lesk incorporates bold
					colours, classic designs, clean cut shape, and warm hues made of
					metal, fabric and studded with stones. This brand imbibes the
					dynamism of colours, youth and spunk.</p>
				<p class="text-center">
					<a href="#show/all/products" class="btn btn-primary">View
						More</a>
				</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="well">
				<img src="images/hairstyles.jpg" class="img-responsive">
				<p class="text-justify" style="font-size: 17px;">Silver Crystals
					Rhinestones Hollow Flower Head Chain Jewelry Forehead Headpiece
					Bride</p>
				<p class="text-center">
					<a href="#show/all/products" class="btn btn-primary">View
						More</a>
				</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="well">
				<img src="images/gold jewelry.jpg" class="img-responsive">
				<h2 class="text-justify" style="font-size: 17px;">Rivaah Brides</h2>
				<p>Rivaah is an ode to the beautiful brides of India. As varied
					as the communities she hails from, the Indian bride looks
					absolutely resplendent in her wedding finery. she looks
					forward to her wedding day like no other.</p>
				<p class="text-center">
					<a href="#/show/all/products" class="btn btn-primary">View
						More</a>
				</p>
			</div>
		</div>
	</div>
	</div>
</div>

<div class="container">
<center>
		<strong class="heading" style="color: white"><h3>Our Brands</h3> </strong>
	</center>
	<hr>
<div class="row">
<div class="col-md-3">
<img src="images/asmibrand.jpg" class="img-responsive" alt="text of the image" >

</div>
<div class="col-md-3">
<img src="images/gili brand.jpg" class="img-responsive" alt="text of the image" >

</div>
<div class="col-md-3">
<img src="images/nakshtra.jpg" class="img-responsive" alt="text of the image">

</div>
<div class="col-md-3">
<img src="images/nirvana.jpg" class="img-responsive" alt="text of the image" >

</div>

</div>
</div>

<div class="site-footer">
<div class="row">
<div class="col-md-4  text-center">
<ul class="footer-nav">
<h5> Quick Navigation</h5>

 <ul class="footer-nav">
<li><a href="#"><span class="glyphicon glyphicon-home"> Home</span></a></li>
<li><a href="#"><span class="glyphicon glyphicon-info-sign"> About</span></a></li>
<li><a href="$#t"><span class="glyphicon glyphicon-earphone"> Contact</span></a></li>

</ul>
</div>
<div class="col-md-4  text-center">
<h5> Privacy and Policy</h5>
<p> To ensure you are confident about your purchase, we have an exclusive Easy Returns and Exchange Policy,
 which gives you enough time to be in no doubt that you have made the right decision of buying jewellery
  from Whitepearl.com. </p>
</div>
<div class="col-md-4 text-center">
 <p> Get in touch with us: </p>
 <ul>
 <a href="#"><span class="social social-facebook"></span>Facebook</span></a><br/>
 <a href="#"><span class="glyphicon glyphicon-twitter">Twitter</span></a><br/>
 <a href="#"><span class="glyphicon glyphicon-google-plus">Google</span></a><br/>
 <a href="$#"><span class="glyphicon glyphicon-linkedin">Linkedin</span></a>
 </ul>
 </div>
</div>
<br>
<br>
<div class"bottom-footer">
<div class="row">
<div class="col-md-12 text-center">
<hr>
 
<p>&copy;Copyright @ 2019</p>
</ul>

</div>
</div>
</div>
</div>


