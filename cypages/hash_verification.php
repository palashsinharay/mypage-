<?php 
include('config.php');
include("phpmailer/class.phpmailer.php");
// table name
$tbl_name="temp_members_db";
// Random confirmation code
$confirm_code=md5(uniqid(rand())); 

// values sent from form 
$email=$_REQUEST['email'];
// Insert data into database

$sql="INSERT INTO $tbl_name(confirm_code, email)VALUES('$confirm_code', '$email')";
$result=mysql_query($sql);

if($result){

// ---------------- SEND MAIL FORM ----------------


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

// Your message
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.=$_SERVER['SERVER_NAME']."/confirmation.php?passkey=$confirm_code";

$mail->message;

$mail->AddAddress($email);
// send email
$sentmail = $mail->Send();

}

// if not found
else {
	echo "Not found your email in our database";
}

// if your email succesfully sent
if($sentmail){
$msg = "Your Confirmation link Has Been Sent To Your Email Address.";
}
else {
$msg = "Cannot send Confirmation link to your e-mail address";
} 
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

                <h2 class="heading"><span><?php echo $msg; ?></span> We will contact you soon</h2>

            </center>

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
