<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!-- SITE TITLE -->
	<title>{{$title}}</title>

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/templatemo-style.css">
	<link href='//fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'>
<!-- 

Ultra Profile

https://templatemo.com/tm-464-ultra-profile

-->
</head>
<body data-spy="scroll" data-target="#rock-navigation">
	<!-- START NAVIGATION -->
	<div class="navbar navbar-default bs-dos-nav navbar-fixed-top sticky-navigation" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">Ultra Soft</a>
			</div>
			<nav class="collapse navbar-collapse" id="rock-navigation">
				<ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
					<li><a href="#home" class="smoothScroll">Asosiy</a></li>
					<li><a href="#work" class="smoothScroll">Ishlarim</a></li>
					<li><a href="#portfolio" class="smoothScroll">Portfolio</a></li>
					<li><a href="#resume" class="smoothScroll">Rezyume</a></li>
					<li><a href="#about" class="smoothScroll">Biz haqimizda</a></li>
					<li><a href="#contact" class="smoothScroll">Aloqa</a></li>
				</ul>
			</nav>

		</div>
	</div>
	<!-- END NAVIGATION -->

    @yield('content')

    <script src="/js/jquery.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/smoothscroll.js"></script>
	<script src="/js/jquery.nav.js"></script>
	<script src="/js/isotope.js"></script>
	<script src="/js/imagesloaded.min.js"></script>
	<script src="/js/custom.js"></script>
</body>
</html>