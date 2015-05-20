<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Jamie Yanagisawa</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
	
	/*Home Page*/
	
	#topContainer{
		background-image:url("pictures/colosseum1.jpg");
		height:900px;
		width:100%;
		background-size:cover;
		color:white;
		padding-top:200px;
		
	}
	
	.name{
		font-size:500%;
		align:center;
	}
	

	#topRow{
		background-color:black;
		opacity:0.8;
		padding:10px;
		border-radius:10px;
		align:center;
	}
  
	#topRow p{
		font-size:300%;
		color:grey;
	}
	  
	#div1{
		padding-top:50px;
		width:100%;
		
	}
	
	/*Web Projects*/
	
	#div2{
		min-height:1000px;
		background-size:cover;
		margin: 0 auto;
		width:100%;
		max-width:1300px;
	}
	
	.projects{
		background-color:black;
		background-size:cover;
		width:100%;
		min-height:1000px;
	}
	.projects:hover{
		
	}
	
	.center{
		text-align:center;
	}
	
	.projectTitle{
		color:#B2BBC2;
		padding-left:30px;
	}
		
	.leadProjectTitle{
		padding-left:35px;
	}
	
	.col-centered{
		display:inline-block;
		float: none;
		text-align:left;
		
		
	}
	
	.background{
		background-color:white;
		opacity:0.7;
		border-radius:10px;
		height:350px;
		width:425px;
		min-width:350px;
		margin:10px;
		margin-left:50px;
		float:bottom;
		float:top;
		float:left;
	}
	
	.centeredBigColumn{
		display:inline-block;
	}
	
	.btn{
		float:bottom;
	}
	
	.title{
		margin-top:80px;
		font-size:300%;
	}
	
	
		
	.glyphpic{
		font-size:50px;
		display:inline-block;
		vertical-align:middle;
		margin:25px;
		margin-left:50px;
		margin-top:10px;
			
	}
	
	/*carousel*/
	
	.photoDiv{
		background-color:#B2BBC2;
		background-size:cover;
		width:100%;
		height:750px;
	}
	
	
	.carousel-inner > .item > img {
		margin: 0 auto;
	}
	.carousel-control.left, .carousel-control.right {
		background-image: none;
		background-color:black;
	}
	.carouselImage{
		background-color:black;
	}
	
	.carouselImage img {
	  max-height: 500px;
	  min-height:500px;
	}
	
	/*about me*/
	
	.aboutMe{
		padding-top:100px;
		background-color:black;
		background-size:cover;
		width:100%;
		max-height:725px;
	}
	
	
	#aboutMeText{
		
		background-color:#B2BBC2;
		float:left;
		border-radius:20px;
		max-width:750px;
		font-size:1.0em;
	}
	
	.mypicture{
		float:left;
	}
	
	#picture{
		float:left;
		margin-bottom:100px;
		padding-bottom:100px;
		max-width:400px;
	}
	
	
	/*contact me*/
	
	#div5{
		background-color:#B2BBC2;
		width:100%;
	}
	.contact{
		height:700px;
	}
  
	/* Footer */
	
	.footer{
		float:bottom;
		background-color:black;
		height:375px;
		padding-top:50px;
	}
	.white:hover{
		color:white
	}
	#media{
		float:left;
	}
	.blue:hover{
		color:#B2BBC2;
	}
  
  </style>
  
  <body data-spy="scroll" data-target=".navbar-collapse">
    
	<div class="navbar navbar-inverse navbar-fixed-top">
	
		<div class="container">
	
			<div class="navbar-header">
			
				<a href="" class="navbar-brand">Jamie Yanagisawa</a>
			
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					
				</button>
			
			
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#topContainer">Home</a></li>
					<li><a href="#div2">Projects</a></li>
					<li><a href="#div3">Photography & Graphic Design</a></li>
					<li><a href="#div4">About Me</a></li>
					<li><a href="#div5">Contact Me</a></li>
	
				</ul>
			</div>
		</div>
	</div>
	
	<div class="container contentContainer" id="topContainer">
	
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3" id="topRow">
			
				<h1 class="name">Jamie Yanagisawa</h1>
			
				<p class="lead">Web Designer and Developer, UX/UI Designer</p>
			
			</div>
			
		</div>
	
	</div>
	
	<!--Web Projects -->
	
	<div class="projects">	
		<div id="div2" class="container contentContainer">
			
			
			
				<h1 class="title projectTitle">Web Development and Design Projects</h1>
			
				<p class="lead leadProjectTitle">My projects demonstrate my abilities using various web technologies.</p>
			
			
			
			<div class="row">
			
				<div class="col-md-3 col-centered background">
				
					<h2><span class="glyphicon glyphicon-book glyphpic"></span><br />Secret Diary</h2>
					<p>The Secret Diary is an app where users can make an account, log in and out of their account, and write in their own private diary. This app demonstrates my abilities in MySQL, PHP, Bootstrap, Javascript, AJAX, jQuery, HTML5, and CSS.</p>
					
					<button class="btn"><a href="SecretDiary/secret-diary.php"><span class="glyphicon glyphicon-book"></span> View</a></button>
			
				</div>
				
				<div class="col-md-3 col-centered background">
				
					<h2><span class="glyphicon glyphicon-ice-lolly glyphpic"></span><br />Landing Page for Dank: Mushroom Wars</h2>
					<p>The Landing Page for Dank: Mushroom Wars is supposed to give viewers some insight into the game. This app demonstrates my abilities in Bootstrap, Javascript, jQuery, AJAX, HTML, and CSS.</p>
					
					<button class="btn"><a href="LandingPageDank/LandingPage.html"><span class="glyphicon glyphicon-ice-lolly"></span> View</a></button>
			
				</div>
				
				
				
				<div class="col-md-3 col-centered background">
				
					<h2><span class="glyphicon glyphicon-cutlery glyphpic"></span><br /> WordPress: Creative Chaos in the Kitchen</h2>
					<p>Creative Chaos in the Kitchen is just an experiment of mine using WordPress. It is a web page that is still in the making, where I will be posting recipes. This website demonstrates my abilities in using WordPress with implementing themes and plugins.</p>
					
					<button class="btn"><a href="WPblog/"><span class="glyphicon glyphicon-cutlery"></span> View</a></button>
			
				</div>
				
			
			
				<div class="col-md-3  col-centered background">
				
					<h2><span class="glyphicon glyphicon-cloud glyphpic"></span><br />Weather Wherever</h2>
					<p>Weather Wherever is an app where users can look up the weather in any city. This app demonstrates my abilities in PHP, Bootstrap, Javascript, jQuery, CSS, and HTML.</p>
					
					<button class="btn"><a href="WeatherScraper/weather-scraper.php"><span class="glyphicon glyphicon-cloud"></span> View</a></button>
			
				</div>
				
				<div class="col-md-3 col-centered background">
				
					<h2><span class="glyphicon glyphicon-envelope glyphpic"></span><br />Postal Code Finder</h2>
					<p>The Postal Code Finder is an app where users can find the postal code of any address. This app demonstrates my abilities in Google APIs, XML, AJAX, PHP, Bootstrap, Javascript, jQuery, HTML, and CSS.</p>
					
					<button class="btn"><a href=""><span class="glyphicon glyphicon-envelope"></span> View</a></button>
			
				</div>
				
				<div class="col-md-3  col-centered background">
				
					<h2><span class="glyphicon glyphicon-exclamation-sign glyphpic"></span><br />Reaction Test</h2>
					<p>Test your reactions in this app. This app demonstrates my abilities in HTML and CSS.</p>
					
					<button class="btn"><a href="ReactionTest/reaction-test.html"><span class="glyphicon glyphicon-exclamation-sign"></span> View</a></button>
			
				</div>
				
			</div>	
		</div>		
			
	</div>
	
	<!--Photography & Graphical Arts -->
	
	<div class="photoDiv">
	
		<div id="div3" class="container contentContainer">
		
			<h2 class="title">Photography & Graphic Design</h2><br />
			<div id="portfolio-carousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#portfolio-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#portfolio-carousel" data-slide-to="1"></li>
				<li data-target="#portfolio-carousel" data-slide-to="2"></li>
				<li data-target="#portfolio-carousel" data-slide-to="3"></li>
				<li data-target="#portfolio-carousel" data-slide-to="4"></li>
				<li data-target="#portfolio-carousel" data-slide-to="5"></li>
				<li data-target="#portfolio-carousel" data-slide-to="6"></li>
				<li data-target="#portfolio-carousel" data-slide-to="7"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
				<div class="item active carouselImage">
				  <img src="Pictures/red-ballon-portfolio.jpg" alt="..." class="carouselImage">
				  <div class="carousel-caption">
					<h3>Red Balloon</h3>
				  </div>
				</div>
				<div class="item carouselImage">
				  <img src="Pictures/venice-portfolio.jpg" alt="..." class="carouselImage">
				  <div class="carousel-caption">
					<h3>Venice, Italy</h3>
				  </div>
				</div>
				<div class="item carouselImage">
				  <img src="Pictures/Florence-portfolio.jpg" alt="..." class="carouselImage">
				  <div class="carousel-caption">
					<h3>Florence, Italy</h3>
				  </div>
				</div>
				<div class="item carouselImage">
				  <img src="Pictures/goldengate-portfolio.jpg" alt="..." class="carouselImage">
				  <div class="carousel-caption">
					<h3>Golden Gate Sunset</h3>
				  </div>
				</div>
				<div class="item carouselImage">
				  <img src="Pictures/jersey-shore.jpg" alt="..." class="carouselImage">
				  <div class="carousel-caption">
					<h3>Jersey Shore</h3>
				  </div>
				</div>
				<div class="item carouselImage">
				  <img src="Pictures/purple-flowers-portfolio.jpg" alt="..." class="carouselImage">
				  <div class="carousel-caption">
					<h3>Mountain Meadow Flowers</h3>
				  </div>
				</div>
				<div class="item carouselImage">
				  <img src="Pictures/snail-portfolio.jpg" alt="..." class="carouselImage">
				  <div class="carousel-caption">
					<h3>Snail</h3>
				  </div>
				</div>
				<div class="item carouselImage">
				  <img src="Pictures/butterfly-portfolio.jpg" alt="..." class="carouselImage">
				  <div class="carousel-caption">
					<h3>Butterfly</h3>
				  </div>
				</div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#portfolio-carousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#portfolio-carousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
		
		
		</div>
	</div>
	
	<!-- About Me Section -->
	
	<div class="aboutMe" id="div4">
	
		<div  class="container contentContainer">
		
			<div class="row">
			
				<div class="col-md-6 col-md-offset-2" id="aboutMeText">
			
					<h1 class="center">About Me</h1>
			
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In 2009 I embarked on my greatest adventure. I moved out of New Jersey, where I was born and raised, to the wonderful city of Seattle to study at the University of Washington. While studying I had the opportunity to study abroad in Italy, where I had the chance to travel around Europe. I graduated from UW in 2013 with a Bachelor of Arts degree in English Language and Literature. After graduating I was a teacher. I soon realized that while I enjoyed teaching, I loved and was passionate about web design and development. And so with my passions in mind I have taken up web development and design. I am experienced with various web technologies such as HTML, CSS, JavaScript, jQuery, AJAX, Bootstrap, and WordPress. I have some experience with MySQL, PHP, APIs, Mobile Apps, Node.js, XML, JSON, and Android Studio. I am currently learning Ruby on Rails, Python, Django, C#, ASP.NET, and Angular.js. I also am a Photography and am experienced with Adobe Photoshop and Illustrator.</p>
				</div>
				
				<div class="col-md-3  mypicture">	
							
					<img src="meyellow.jpg" class="img-responsive img-circle" id="picture" />
					
				</div>
				
			</div>
		</div>
	</div>
	
	<!--Contact Me -->
	
	<div class="contact" id="div5" >
	
		<div  class="container contentContainer">
						
			<?php include("contact-form.php"); ?>
			
			
		</div>
	</div>	
	
	<div class="footer">
		<div class="container">
			<div class="row">
			<div class="col-md-6" id="footerText">
			<h3 class="white">Services...</h3>
			<h4 class="blue">I build interactive, responsive, and user-friendly websites using the newest web technologies. I enjoy graphic arts and photography as well.</h4>			
			<h3 class="white">Thank you for visiting my site!</h3>
			<h4 class="blue">Please contact me above if you would like to work together.</h4>
			
			</div>
			<div class="col-md-6" id="media">
			<h3 class="white">Connect with me on LinkedIn<script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
				<script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/jamieyanagisawa" data-format="click" data-related="false" data-text="Jamie Yanagisawa"></script><h3>
			</div>
			</div>
		</div>
	</div>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	
	<script>
		$(".contentContainer").css("min-height",$(window).height());
		
	</script>
	
	
  </body>
</html>
