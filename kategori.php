<?php
session_start();
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>About us</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tokopekita, Richard's Lab" />
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
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">about us</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!--- beverages --->
	<div class="products">
		<div class="container">
			<div class="col-md-4 ">
				<div class="categories">
					<h2>artikel menarik lainnya</h2>
					<ul class="categories">
						<li><a href="https://www.ruparupa.com/blog/cara-membuat-kopi-yang-enak/">7 Cara Membuat Kopi Enak ala Coffee Shop</a></li>
				          <li><a href="https://cetroocoffee.com/2020/03/13/5-tips-dan-cara-memilih-biji-kopi-mentah-terbaik/"> 5 Tips dan Cara memilih Biji Kopi yang Baik</a></li>
				          <li><a href="https://majalah.ottencoffee.co.id/pengetahuan-tentang-kopi-untuk-pemula/">Pengetahuan Tentang Kopi Untuk Pemula</a></li>
				          <li><a href="https://www.kompas.com/food/read/2020/10/01/070700875/resep-kopi-vietnam-drip-kopi-susu-panas-buat-morning-coffee">Resep Kopi Vietnam Drip</a></li>
				     </ul>
				</div>															
			</div>
			
<div class="col-md-8 mb-4">
  <div class="card">
  <div class="card-body">
  	<h4>About Rentjana Roastery</h4>
  	<p>Rentjana Coffee Roastery merupakan usaha yang bergerak dibidang kedai minuman, kedai kopi yang menghadirkan berbagai jenis olahan kopi dari berbagai jenis biji kopi, selain itu Rentjana Coffee Roastery memproduksi biji panggang langsung dari Roastery yang dimilikinya yang dimana Rentjana Coffee Roastery ini memiliki kapasitas mesin 5 kg.</p>

  	<p class="" mt-5>Kami berkeinginan menjadi tempat alternatif mendapatkan kopi selain kopi tradisional, dan tentu saja kami berusaha untuk mumpuni baik dalam biji kopi sangrai, Roasted Beans ataupun produk minumannya dan kami juga ingin agar keberadaan kopi tradisional tidak terganti yang dimana sekarang mulai bergeser dan kami hanya melakukan alternatif baru melalui passion yang kami punya.</p>
    
				
				
				
						
					
					
						<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--- beverages --->
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
	<script type="text/javascript">
		$(document).ready(function() {
			
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 4000,
				easingType: 'linear' 
				};
			
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
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