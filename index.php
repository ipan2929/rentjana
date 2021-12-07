<?php
session_start();
include 'dbconnect.php';

?>

<!DOCTYPE html>
<html>
<head>
<title>RENTJANA</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Falenda Flora, Ruben Agung Santoso" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	
			<div class="clearfix"> </div>
		</div>
	</div>

	
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<a class="navbar-brand" href="#">RENTJANA ROASTERY</a>
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.php" class="act">Home</a></li>	
									<li><a href="kategori.php">About Us</a></li>
									<li><a href="produk.php">Product</a></li>
									<li><a href="cart.php">Keranjang Saya</a></li>
									
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
	<section class="jumbotron mb-4 bg-light">
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <img src="img/background.png">
    <p class="lead">Gerai Kopi | Ruang Sangrai</p>
  </div>
</div>
</section>
		
	<!-- //main-slider -->
	<!-- //top-header and slider -->
	<!-- top-brands -->
	
												
								
								
								<div class="clearfix"> </div>
							</div>
						</div>
						
											
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //top-brands -->


<section class="jumbotron-bg">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h4>GOOGLE MAPS</h4>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16101885.499997571!2d128.63598472043378!3d-9.83991882262167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sid!2sid!4v1571373801127!5m2!1sid!2sid" width="450" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    <p class="lead"></p>
  </div>
</div>
</section>









<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-4 w3_footer_grid">
					<h3>Contact Us</h3>
					
					<ul class="address">
						<li><img class="" src="images/alamat.png" width="30">Jl. Sejarah Gg.Gunung Malabar, Pontianak.</li>
						<li><img class="" src="images/phone.png" width="30"></i>+62 8113 2322</li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<ul class="info"> 
						<li></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			<div class="container">
				<p>© 2021 rentjana.roastery</p>
			</div>
		</div>
		
	</div>	
	
				
			</div>
		</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	
<!-- //here ends scrolling icon -->

<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>