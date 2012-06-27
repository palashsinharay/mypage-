<?php
session_start();
include("phpmailer/class.phpmailer.php");
$url=$_GET['url'];
$pro =trim($_GET['profile']);
//echo $pro;
//$pro ='default';
$email = $_SESSION['email'];


// generatePassword() fuction is used to create radam password
function generatePassword($length=9, $strength=0) {
        $vowels = '123456789';
        $consonants = 'bdghjmnpqrstvzaeiou';
        if ($strength & 1) {
                $consonants .= 'BDGHJLMNPQRSTVWXZAEIOU';
        }
        if ($strength & 2) {
                $vowels .= "AEUY";
        }
        if ($strength & 4) {
                $consonants .= '23456789';
        }
        if ($strength & 8) {
                $consonants .= '@#$%';
        }
 
        $password = '';
        $alt = time() % 2;
        for ($i = 0; $i < $length; $i++) {
                if ($alt == 1) {
                        $password .= $consonants[(rand() % strlen($consonants))];
                        $alt = 0;
                } else {
                        $password .= $vowels[(rand() % strlen($vowels))];
                        $alt = 1;
                }
        }
        return $password;
}
 
$adminpass = generatePassword();
$userpass = generatePassword();
//echo $adminpass;
//echo $userpass;

//$output = shell_exec($url." ".$pro); 
$output = shell_exec("sudo -u aegir ./createsite_final2 ".$url.".indusnetlabs.com ".$pro." ".$email." ".$userpass." ".$adminpass);

//echo "<pre>$output</pre>";
$url2 ="http://".$url.".indusnetlabs.com";
$msg1 = "your site name is ".$url.".indusnetlabs.com";
//-----------SEND MAIL FORM----Start------------------------------

$mail             = new PHPMailer(); // PHPMailer object init

//------------------Your smtp settings-------start-----------

$mail->IsSMTP();
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server

$mail->Username   = "devops@indusnetlabs.com";  // GMAIL username
$mail->Password   = "d3v0ps123";            // GMAIL password

$mail->AddReplyTo("devops@indusnetlabs.com","palash sinha ray");

$mail->From       = "palash@cypage.deploy.loc";
$mail->FromName   = "palash sinha ray";

$mail->Subject    = "PHPMailer Test Subject via gmail";
//------------------Your smtp settings-------End-----------

$message = "cypage account details","your site login details","your site url is: ".$url.".indusnetlabs.com/user"." administrator account :-  username:admin password: $adminpass publisher account :- username : $email password : $userpass");

$mail->message;

$mail->AddAddress($email); 

//-----------SEND MAIL FORM----End--------------------------------
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

	

	$('.price').click(function() {

		$('.priceDetailsPan').show('slow');

	});

	

	$('#hidePrice').click(function() {

		$('.priceDetailsPan').fadeOut();

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
        <div class="spacer"></div>
    </header>
    <!-- Header End -->
    <div class="stage">
        	<center>
                <h2 class="heading"><span><a href="<?php echo $url2 ;?>/"><?php echo $msg1 ;?></a></span></h2>
            </center>
    </div>

<!-- Left Panel Start -->

    <div class="leftPan">

    <section>

    	<h2>Why is cypages ? </h2>

        <p>Cypages is a business listing site that lowers the barrier for small business owners to enable a web presence without compromising on quality, functionality or technology.</p>

        <div class="botBdr"></div>

    </section>

    <section id="priceMain">

    	<!-- Offer Start -->

        <div class="offer">

        	<div class="offerText">

                <p class="text1">All this starting at just</p>

                <p class="text2">$9.99</p>

                <p class="text3">/yr</p>

                <div class="spacer"></div>

            </div>

            <div class="pricePan">

            	<p class="price" id="priceBtn"><a href="#" title="Plan and Pricing">Plan and Pricing</a></p>

            </div>

        </div>

        <!-- Price Details Start -->

        <div class="priceDetailsPan" id="showPrice">

        	<h2>Plan and Pricing <a href="#" id="hidePrice">Close</a> </h2>

            <div class="priceDetailsInner" id="free">

           	  <h3>FREE</h3>

              <ul>

                <li>Standers pages (4) </li>

                <li>5 themes </li>

                <li>5 theme categories </li>

                <li>Free delivery listing (One category) </li>

              </ul>

              <p><span>Free!</span> </p>

              <a href="#" class="signup">Sign up</a>  

            </div>

            <div class="priceDetailsInner" id="basic">

                <h3>Basic </h3>

                <ul>

                  <li>Upto 10 pages </li>

                  <li>20 thems </li>

                  <li>10 product categories </li>

                  <li>Free Directory listing (One time) </li>

                  <li>FB integration</li>

                </ul>

                <p><span>INR 1000 </span>/m </p>

              	<a href="#" class="signup">Sign up</a>  

            </div>

            <div class="priceDetailsInner" id="pro">

              <h3>Pro </h3>

              <ul>

               	<li>Unlimited pages </li>

               	<li>All themes </li>

                <li>Unlimited categories </li>

                <li>Directory listing</li>

                <li>1 free featured listing (x mins/m)</li>

                <li>FB integration</li>

                <li>SEO </li>

              </ul>

              <p><span>$3000</span>/m </p>

              <a href="#" class="signup">Sign up</a>

              

            </div>

            <div class="spacer"></div>

            

        </div>

        <!-- Price Details End -->

        <!-- Offer End -->

        <!-- Body Content Start -->

    	<h2>Why you should signup ?</h2>

        <ul>

            <li>It makes your business visible to millions of people across the globe</li>

            <li>It is easy to create</li>

            <li>It is easy to manage.</li>

        </ul>

        <p>Cypages is a business listing site that lowers the barrier for small business owners to enable a web presence without compromising on quality, functionality or technology. Cypages is a business listing site that lowers the barrier for small business owners to enable a web presence without compromising on quality, functionality or technology.</p>

        <!-- Body Content End -->

    </section>

	</div>

    <!-- Left Panel End -->

    <!-- Right Panel Start -->

    <div class="rightPan">

    	<!-- Browse and Find Form Start -->

      <div class="find">

        <form action="" method="get">

            <div class="browseButt">

            	<a href="#">Browse the directory</a>

            </div>

            <div class="searchPan">

            	<input name="" type="text">

                <input name="" type="submit" class="search" value="">

                <div class="spacer"></div>

            </div>

            <div class="spacer"></div>

        </form>

        </div>

        <!-- Browse and Find Form End -->

      <div class="botBdr"></div>

        <!-- Feature Panel Start -->

        <section>

            <h2>Featured business of the day </h2>

            <div class="featurePan">

                <img src="http://t2.gstatic.com/images?q=tbn:ANd9GcSG3rrBsUQeDAFZxuS27lO64R4OQGij3xyZe5dyzERv92immiocYQ" alt="">

                <h3>stone & company</h3>

                <p>creating stones since 1920. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut dui ante. Nulla pulvinar hendrerit nisl vel convallis. Suspendisse in felis tellus, quis vulputate purus. creating stones since 1920. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut dui ante. Nulla pulvinar hendrerit nisl vel convallis.</p>

                <div class="spacer"></div>

            </div>

            <p class="feature"><a href="#" title="Feature your business here">Feature your business here</a></p>

        	<img src="img/feature-right-bg.gif" width="32" height="31" alt="">

            <div class="spacer"></div>

        </section>

        <!-- Feature Panel End -->

    </div>

    <!-- Right Panel End -->

    <div class="spacer"></div>


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


