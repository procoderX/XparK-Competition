<?php 
	/* Local configurations/ overrides
	***********************************************/	

	
	include ('php/functions.php');
?>


<!doctype html>
<html itemscope itemtype="http://schema.org/<?php print(site_type); ?>" class=no-js>
<head>
<head>
	<meta charset="utf-8">
	
	<title>	<?php print(site_title); ?> </title>
		
	<meta name="viewport" content="width=device-width,initial-scale=1">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<meta itemprop="name" content="<?php print(site_title)?>">
	<meta name="description" content="<?php print(site_description);?>">
	<meta itemprop="description" content="<?php print(site_description);?>">
	<meta itemprop="image" content="<?php print(site_photo_url);?>">
	<meta name="keywords" content="<?php print(site_keywords);?>">
	<meta name="author" content="<?php print(site_author);?>">
	
	<?php get_fb_meta() ;?>
	
	<link rel="stylesheet" href="assests/css/style.css">
	<link rel="stylesheet" href="assests/css/logo.xpark.css">
  
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build incl. Respond.js
       Respond is a polyfill for min/max-width media queries. Modernizr enables HTML5 elements & feature detects; 
       for optimal performance, create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="assests/js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
  <header>
	<section>
		<div id="logo-xpark" class=logo>
			<div class=title>XparK</div>
			<div class=subtitle>
				an annual online social Coding competition.
			</div>
		</div>		
	</section>
	<section>
		
	</section>
  </header>
  <div role="main">

  </div>
  <footer>

  </footer>


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assests/js/libs/jquery-1.7.1.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via build script -->
  <script defer src="assests/js/plugins.js"></script>
  <script defer src="assests/js/script.js"></script>
  <!-- end scripts -->


  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
</body>
</html>
