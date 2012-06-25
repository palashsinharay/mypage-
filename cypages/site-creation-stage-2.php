<?php 
session_start();
//$email=$_REQUEST['email'];
//$_SESSION['email']=$email;
//echo "SESSION-->".$_SESSION['email'];


?>
<!doctype html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->

<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->

<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->

<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->

<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>

  <meta charset="utf-8">



  <!-- Use the .htaccess and remove these lines to avoid edge case issues.

       More info: h5bp.com/b/378 -->

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">



  <title>Cypages | Usable Business Listings</title>

  <meta name="description" content="">

  <meta name="author" content="">



  <!-- Mobile viewport optimized: j.mp/bplateviewport -->

  <meta name="viewport" content="width=device-width,initial-scale=1">



  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->



  <!-- CSS: implied media=all -->

  <!-- CSS concatenated and minified via ant build script-->

  <link href='http://fonts.googleapis.com/css?family=Signika+Negative:300,400,600,700|Signika:400,700,600,300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="css/style.css">

  <!-- end CSS-->



  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->



  <!-- All JavaScript at the bottom, except for Modernizr / Respond.

       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries

       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->

<script src="js/libs/modernizr-2.0.6.min.js"></script>

<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function() {

	$('.register').click(function() {

	  $('.registerForm').toggle('slow', function() {

		});

	});

	$('.profile').click(function(){
            var img_id = $(this).attr('id');
            $('#profile').val(img_id);
	});

});

</script>

</head>



<body>

<div id="container">

<!-- Main Body Area Start -->

<div id="mainWidth">

    <!-- Header Start -->

    <header id="top">

    	<h1><span>Cypages</span> Usable Business Listings</h1>

    	<img src="img/company-name-right-bg.gif" width="37" height="37" alt="">

        <ul>

        	<li><a href="#" class="signin"><span>&nbsp;</span>Signin</a></li>
        </ul>

        <div class="spacer"></div>

        

	</header>

    <!-- Header End -->

    
	
    <div>

        <h2 class="heading">Website creation <span>Stage 2 : Site details</span></h2>

        <div class="stage">
		 
		 
            <form action="create_site.php" method="get">
            <input type="hidden" name="profile" id="profile" value=""/>

            <p>Hi, <span><?php echo $_SESSION['email']; ?></span>. Fill out the form below to finish creating your website</p>

            <div>

            	<label>Business </label>

                <input name="" type="text">

            </div>

            <div>

            	<label>Domain Name </label>

            </div>

            <div>

              <input name="url" type="text" class="box2">.indusnetlabs.com
            </div>

            <div class="stage2">

               <!-- <select name="profile">
                   <option value="zen">zen</opt​ion>
                   <option value="rockcastle​">rockcastle</opt​ion> 
                   <option value="corolla">corolla</opt​ion>
                   <option value="colourise">colourise</option>
                   <option value="scruffy">scruffy</option>
                   <option value="arthemia">arthemia</option>
                   <option value="compositio">Compositio</option>
               </select> -->
            <p>Design (You can change this later on if you wish)</p>

            <ul>

            	<li><a href="#"><img id="scruffy" src="http://blog.qbrushes.net/wp-content/uploads/2008/10/scruffy-drupal-theme.jpg" alt="" class="profile"></a></li>

                <li><a href="#"><img id="arthemia" src="http://drupal-theme.net/system/files/imagecache/658x494/themes/preview/arthemia-drupal-theme.png" alt=""  class="profile"></a></li>

                <li><a href="#"><img id="colourise" src="http://drupal-theme.net/system/files/imagecache/658x494/themes/preview/colour_drupal_theme.png" alt=""  class="profile"></a></li>

               <!-- <li><a href="#"><img id="compositio" src="http://t2.gstatic.com/images?q=tbn:ANd9GcSG3rrBsUQeDAFZxuS27lO64R4OQGij3xyZe5dyzERv92immiocYQ" alt=""  class="profile"></a></li>

                <li><a href="#"><img id="arthemia" src="http://t2.gstatic.com/images?q=tbn:ANd9GcSG3rrBsUQeDAFZxuS27lO64R4OQGij3xyZe5dyzERv92immiocYQ" alt=""  class="profile"></a></li>

                <li><a href="#"><img id="compositio" src="http://t2.gstatic.com/images?q=tbn:ANd9GcSG3rrBsUQeDAFZxuS27lO64R4OQGij3xyZe5dyzERv92immiocYQ" alt=""  class="profile"></a></li>

                <li><a href="#"><img id="profile7" src="http://t2.gstatic.com/images?q=tbn:ANd9GcSG3rrBsUQeDAFZxuS27lO64R4OQGij3xyZe5dyzERv92immiocYQ" alt=""  class="profile"></a></li>

                <li><a href="#"><img id="profile8" src="http://t2.gstatic.com/images?q=tbn:ANd9GcSG3rrBsUQeDAFZxuS27lO64R4OQGij3xyZe5dyzERv92immiocYQ" alt=""  class="profile"></a></li>

                <li><a href="#"><img id="profile9" src="http://t2.gstatic.com/images?q=tbn:ANd9GcSG3rrBsUQeDAFZxuS27lO64R4OQGij3xyZe5dyzERv92immiocYQ" alt=""  class="profile"></a></li>

                <li><a href="#"><img id="profile10" src="http://t2.gstatic.com/images?q=tbn:ANd9GcSG3rrBsUQeDAFZxuS27lO64R4OQGij3xyZe5dyzERv92immiocYQ" alt=""  class="profile"></a></li>

                <li><a href="#"><img id="profile11" src="http://t2.gstatic.com/images?q=tbn:ANd9GcSG3rrBsUQeDAFZxuS27lO64R4OQGij3xyZe5dyzERv92immiocYQ" alt=""  class="profile"></a></li>

                <li><a href="#"><img id="profile12" src="http://t2.gstatic.com/images?q=tbn:ANd9GcSG3rrBsUQeDAFZxuS27lO64R4OQGij3xyZe5dyzERv92immiocYQ" alt=""  class="profile"></a></li>

                <li><a href="#"><img id="profile13" src="http://t2.gstatic.com/images?q=tbn:ANd9GcSG3rrBsUQeDAFZxuS27lO64R4OQGij3xyZe5dyzERv92immiocYQ" alt=""  class="profile"></a></li>

                <li><a href="#"><img id="profile14" src="http://t2.gstatic.com/images?q=tbn:ANd9GcSG3rrBsUQeDAFZxuS27lO64R4OQGij3xyZe5dyzERv92immiocYQ" alt=""  class="profile"></a></li> -->

            </ul>

            <div class="spacer"></div>

            <div class="browseButt">

            	<!-- <a href="#" class="browseButt">Next</a> -->
                <input type="submit" name="create_site" value="CreateSite"/> 

            </div>

            <div class="spacer"></div>

            </div>    

            </form>

        </div>

    </div>
	

    <!-- Footer Start -->

    <footer>

    	<div class="footerLeft">

        	&copy; Copyright Cypages.

        </div>

        <div class="footerRight">

        	<ul>

            	<li><a href="#" title="About">About</a></li>

                <li class="noDiv"><a href="#" title="Privacy">Privacy</a></li>

            </ul>

        </div>

        <div class="spacer"></div>

	

    </footer>

    <!-- Footer End -->

</div>

<!-- Main Body Area End -->

</div> <!--! end of #container -->





  <!-- JavaScript at the bottom for fast page loading -->



  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->

  <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->

  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>





  <!-- scripts concatenated and minified via ant build script-->

  <script defer src="js/plugins.js"></script>

  <script defer src="js/script.js"></script>

  <!-- end scripts-->



	

  <!-- Change UA-XXXXX-X to be your site's ID -->

  <!--<script>

    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];

    Modernizr.load({

      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'

    });

  </script>-->





  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.

       chromium.org/developers/how-tos/chrome-frame-getting-started -->

  <!--[if lt IE 7 ]>

    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>

    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>

  <![endif]-->

  

</body>

</html>
