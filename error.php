<?php
  define('BASE', 'BASE');
  require_once './assets/db/config.php';
  require_once './assets/db/database.php';
  require_once './assets/db/utility.php';
  require_once './assets/db/logger.php';
  $res = Connect('0');
?>

<?php
$ip = getenv ("REMOTE_ADDR");
$requri = getenv ("REQUEST_URI");
$servname = getenv ("SERVER_NAME");
$combine = "You're tried to load <b>" . $servname . $requri ."</b>";
$httpref = getenv ("HTTP_REFERER");
$httpagent = getenv ("HTTP_USER_AGENT");
$today = date("D M j Y g:i:s a");
$note = "You are in a wrong page!" ;
$message = "This page was generated because ".$combine;
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Error 404 - Page Not Found</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
		
        <!-- Latest compiled and minified CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	    <!-- Optional theme -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="http://www.leopisang.net/assets/css/normalize.css">
        <link rel="stylesheet" href="http://www.leopisang.net/assets/css/style-error.css">		
		<link rel="stylesheet" href="http://www.leopisang.net/assets/css/responsive.css">
      	<script src="http://www.leopisang.net/assets/plugins/modernizr-2.6.2.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
		
		<!-- 404 content -->
		<div class="four_zero_warapper_area column">
			<div class="header">
				<h3>Error</h3>
			</div>
			<div class="four_zero_text">
				<h1>There Is Nothing Out Here</h1>
				<p><?php echo $message;?></p>
			</div>
		</div>
		<!-- end 404 content -->
		
		<!-- 404 mainmenu -->
		<div class="mainmenu_area">
		
			<div class="menu_heading column">
				<h2>Where would you like to go now?</h2>
			</div>
			
			<!-- mainmenu -->
			<div class="mainmenu_bg">
				<div class="mainmenu column">
					<ul>
						<li><a href="./">Home</a></li>                                                  
						<li><a href="./#portfolio-section">Project</a></li>
                        <li><a href="./#experiences-section">Experiences</a></li>
                        <li><a href="./#education-section">Education</a></li>
                        <li><a href="./#skills-section">Skills</a></li>
                        <li><a href="./#contact-section">Contact</a></li>
					</ul>
				</div>
			</div>
			
		</div>
		<!-- end 404 mainmenu -->
		
		
		

        <script type="text/javascript" src="http://www.leopisang.net/assets/plugins/jquery-1.12.4.min.js"></script>
    	<script type="text/javascript" src="http://www.leopisang.net/assets/plugins/bootstrap/js/bootstrap.min.js"></script>  
    </body>
</html>
