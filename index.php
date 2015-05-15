


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
	
	#topContainer{
		background-image:url("patterns/fire.png");
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
	#div2{
		background-image:url("patterns/purplecobweb.png");
		min-height:800px;
		width:100%;
		background-size:cover;
		
	}
	#aboutMeText{
		background-color:#d3d1d1;
		padding:20px;
		border-radius:20px;
		margin:85px;
		margin-top:200px;
		max-width:450px;
		font-size:1.2em;
	}
	
	
	#picture{
		margin-top:300px;
		
	}
	
	#div3{
		background-image:url("patterns/purpleswirl.png");
		min-height:1000px;
		width:100%;
		background-size:cover;
	
	}
	
	.center{
		text-align:center;
	}
	
	.white{
		color:white;
	}
	
	.background{
		
		background-color:white;
		opacity:0.7;
		padding:15px;
		border-radius:10px;
		height:350px;
		max-width:400px;
		margin:3px;
		margin-left:20px;
	}
	
	.backgroundbottom{
		
		background-color:white;
		opacity:0.7;
		padding:15px;
		border-radius:10px;
		height:300px;
		max-width:400px;
		margin:3px;
		margin-left:20px;
		margin-bottom:50px;
	}
	
	.btn{
		float:bottom;
	}
	
	.title{
		margin-top:80px;
		font-size:300%;
	}
	
	.marginTop{
		margin-top:10px;
	}
	
	.marginBottom{
		margin-bottom:10px;
	}
	
	.glyphpic{
		font-size:50px;
		display:inline-block;
		vertical-align:middle;
		margin:25px;
		margin-left:50px;
		margin-top:10px;
			
	}
	
	#div4{
		background-image:url("patterns/blacksquares.png");
		width:100%;
		color:white;
	
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
					<li><a href="#div2">About Me</a></li>
					<li><a href="#div3">Projects</a></li>
					<li><a href="#div4">Contact Me</a></li>
	
				</ul>
			</div>
		</div>
	</div>
	
	<div class="container contentContainer" id="topContainer">
	
		<div class="row">
		
			<div class="col-md-6 col-md-offset-3" id="topRow">
			
				<h1 class="name">Jamie Yanagisawa</h1>
			
				<p class="lead">Web Developer, UX/UI Designer</p>
				
				
			
			</div>
			
		</div>
	
	</div>
	
	
	
	<div id="div2" class="container contentContainer">
	
		<div class="row">
		
			<div class="col-md-8" id="aboutMeText">
		
				<h1 class="center">About Me</h1>
		
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In 2009 I embarked on my greatest adventure. I moved out of New Jersey, where I was born and raised, to the wonderful city of Seattle to study at the University of Washington. While studying I had the opportunity to study abroad in Italy, where I had the chance to travel around Europe. I graduated from UW in 2013 with a Bachelor of Arts degree in English Language and Literature. After graduating I was a teacher. I soon realized that while I enjoyed teaching, I loved web design more. And so with my passions in mind I have taken up web development and design. I am experienced with various web technologies such as HTML, HTML5, CSS, Javascript, jQuery, AJAX, Bootstrap, MySQL, PHP, WordPress, APIs, and some experience with Mobile Apps, Node, and Android Studio. I also am experienced with Adobe Photoshop and Illustrator.</p>
				
				
			</div>
			
			<div class="col-md-4">
			
				<img src="meyellow.jpg" class="img-responsive img-circle" id="picture" />
			
			</div>
			
		</div>
		
	</div>
		
		
	
	
	<div id="div3" class="container contentContainer">
		
		<div class="row center">
		
			<h1 class="center title white">My Projects</h1>
		
			<p class="lead center white">My projects demonstrate my abilities in various web technologies.</p>
		</div>
		
		
		<div class="row marginBottom ">
		
			<div class="col-md-4 side marginTop background">
			
				<h2><span class="glyphicon glyphicon-book glyphpic"></span><br />Secret Diary</h2>
				<p>The Secret Diary is an app where users can make an account, log in and out of their account, and write in their own private diary. This app demonstrates my abilities in MySQL, PHP, Bootstrap, Javascript, AJAX, jQuery, HTML5, and CSS.</p>
				
				<button class="btn"><a href=""><span class="glyphicon glyphicon-book"></span> View</a></button>
		
			</div>
			
			<div class="col-md-4 marginTop background">
			
				<h2><span class="glyphicon glyphicon-ice-lolly glyphpic"></span><br />Landing Page for Dank: Mushroom Wars</h2>
				<p>The Landing Page for Dank: Mushroom Wars is supposed to give viewers some insight into the game. This app demonstrates my abilities in Bootstrap, Javascript, jQuery, AJAX, HTML, and CSS.</p>
				
				<button class="btn"><a href="LandingPageDank/LandingPage.html"><span class="glyphicon glyphicon-ice-lolly"></span> View</a></button>
		
			</div>
			
			
			
			<div class="col-md-4 marginTop background">
			
				<h2><span class="glyphicon glyphicon-cutlery glyphpic"></span><br /> WordPress: Creative Chaos in the Kitchen</h2>
				<p>Creative Chaos in the Kitchen is just an experiment of mine using WordPress. It is a web page that is still in the making, where I will be posting recipes. This website demonstrates my abilities in using WordPress with implementing themes and plugins.</p>
				
				<button class="btn"><a href="http://jamieyanagisawa.com/WPBlog"><span class="glyphicon glyphicon-cutlery"></span> View</a></button>
		
			</div>
			
			
			
			
		</div>	
			
		<div class="row marginBottom ">
		
			<div class="col-md-4 marginTop backgroundbottom">
			
				<h2><span class="glyphicon glyphicon-cloud glyphpic"></span><br />Weather Wherever</h2>
				<p>Weather Wherever is an app where users can look up the weather in any city. This app demonstrates my abilities in PHP, Bootstrap, Javascript, jQuery, CSS, and HTML.</p>
				
				<button class="btn"><a href="WeatherScraper/weather-scraper.php"><span class="glyphicon glyphicon-cloud"></span> View</a></button>
		
			</div>
			
			<div class="col-md-4 marginTop backgroundbottom">
			
				<h2><span class="glyphicon glyphicon-envelope glyphpic"></span><br />Postal Code Finder</h2>
				<p>The Postal Code Finder is an app where users can find the postal code of any address. This app demonstrates my abilities in Google APIs, XML, AJAX, PHP, Bootstrap, Javascript, jQuery, HTML, and CSS.</p>
				
				<button class="btn"><a href=""><span class="glyphicon glyphicon-envelope"></span> View</a></button>
		
			</div>
			
			<div class="col-md-4 marginTop backgroundbottom">
			
				<h2><span class="glyphicon glyphicon-exclamation-sign glyphpic"></span><br />Reaction Test</h2>
				<p>Test your reactions in this app. This app demonstrates my abilities in HTML and CSS.</p>
				
				<button class="btn"><a href="ReactionTest/reaction-test.html"><span class="glyphicon glyphicon-exclamation-sign"></span> View</a></button>
		
			</div>
			
		</div>		
			
			
	</div>
	
	
	
	
		<div id="div4" class="container contentContainer">
		
			<?php include("contact-form.php"); ?>
		
		
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




