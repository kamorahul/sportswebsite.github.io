<!DOCTYPE HTML>
<html>
	<head>
		<title>Lavin Indo Sports</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='//fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {

			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
		  <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
	</head>
	<body>
	<!---start-wrap---->
		<!---start-header---->

		<div class="header" id="top" style=" display:block; float:left; ">
			<div class="wrap" style="border:0px solid yellow; float:left; width:1350px; border-bottom:3px solid #004080;">
			<!---start-logo---->
			<div class="logo" style="border:0px solid red; margin-top:-2px; float:left; margin-left:120px;">
				<a href="index" ><img src="images/Society-Logo.jpg" title="logo" /></a>
			</div>
			<!---End-logo---->
			<!---start-top-nav---->
			<div class="top-nav" style="border:0px solid blue; float:right; width:850px;">
				<ul>
					<li><a href="index">Home</a></li>
					<li><a href="about">About Us</a></li>
					<li><a href="vision">Vision</a></li>
					<li><a href="plan">Strategic Plan</a></li>
					<li><a href="gallery">Gallery</a></li>
					<li><a href="contact">Contact</a></li>
				</ul>
			</div>

			<!---End-top-nav---->
		</div>
		<!---End-header---->
	</div>
