<?php
	//include_once 'bits/sys/sys.php';
	if (empty($_GET['p']))
		$_GET['p'] = 'Home';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
 <head xmlns="http://www.w3.org/1999/xhtml" lang="en" dir="ltr">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Allender Farm</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="bits/css/normalize.min.css">
	<link rel="stylesheet" href="bits/css/fotorama.css">
	<link rel="stylesheet" href="bits/css/jquery-ui.css">
	<link rel="stylesheet" href="bits/css/styles.css">
	<link type="image/png" rel="shortcut icon" href="img/favicon.png">
	<script type="text/javascript" src="bits/js/jquery.min.js"></script>
	<script type="text/javascript" src="bits/js/fotorama.js"></script>
	<script type="text/javascript" src="bits/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="bits/js/scripts.js"></script>
	<!--[if lt IE 9]><script type="text/javascript" src="bits/js/modernizr.js"></script><![endif]-->
	<!--[if lte IE 7]><style type="text/css">
		#header li { display: inline; }
		#header li a { border-right: 0; }
		#header img#logo { float: left; }
	</style><![endif]-->
	<script type="text/javascript">
		$( "#inner" ).append( createTextNode('<input type="checkbox" name="humancheck" value="">') );
	</script>
	<?php
		if (!empty($_GET['p']) && $_GET['p'] != 'Home')
			echo '<style>#main{float:none;width:98%;} aside#aside{display:none;}</style>';
	?>
 </head>

 <body id="pg<?php echo strtolower($_GET['p']) ?>">
	<div>
		<header id="header">
		  <div class="sitewidth">
			<a href="?p=Home">
				<img src="img/logo.png" alt="logo" id="logo">
			</a>
			
			<div class="right">
				<ul>
					<li>
						Tel: 01271 866679
					</li>
					
					<li>
						<a href="mailto:allenderfarm@btinternet.com" id="mail">
							allenderfarm@btinternet.com
						</a>
					</li>
					
					<li>
						<a href="http://twitter.com/allender_farm" id="soc">
							<img alt="twitter" src="img/icons/twiticon.png">
						</a>
						<a href="http://facebook.com/" id="soc">
							<img alt="facebook" src="img/icons/fbicon.png">
						</a>
					</li>
				</ul>
			</div>
		  </div>
		
			<nav id="nav">
			  <div class="sitewidth">
				<ul>
					<li>
						<a href="?p=Home" class="<?php if($_GET['p']=='Home'){echo 'active';} ?>">
							Home
						</a>
					</li>
					
					<!--<li>
						<a href="?p=News" class="<?php if($_GET['p']=='News'){echo 'active';} ?>">
							News
						</a>
					</li>-->
					
					<li>
						<a href="?p=About" class="<?php if($_GET['p']=='About'){echo 'active';} ?>">
							About
						</a>
					</li>
					
					<li>
						<a href="?p=Cottages" class="<?php if($_GET['p']=='Cottages'){echo 'active';} ?>">
							The Cottages
						</a>
					</li>
					
					<li>
						<a href="?p=Location" class="<?php if($_GET['p']=='Location'){echo 'active';} ?>">
							Location
						</a>
					</li>
					
					<li>
						<a href="?p=Thingstodo" class="<?php if($_GET['p']=='Thingstodo'){echo 'active';} ?>">
							Things to do
						</a>
					</li>
					
					<!--<li>
						<a href="?p=Testimonials" class="<?php if($_GET['p']=='Testimonials'){echo 'active';} ?>">
							Testimonials
						</a>
					</li>-->
					
					<li>
						<a href="?p=BookOnline" class="<?php if($_GET['p']=='BookOnline'){echo 'active';} ?>">
							Book Online
						</a>
					</li>
					
					<li>
						<a href="?p=ContactUs" class="<?php if($_GET['p']=='ContactUs'){echo 'active';} ?>">
							Enquiries
						</a>
					</li>
				</ul>
			  </div>
			</nav>
		</header>
		
		
		<main id="page">
		 <div class="sitewidth">
			<?php if (empty($_GET['p']) || $_GET['p'] == 'Home')
				echo '<div id="textoverflow" class="sitewidth">
					Dog Friendly <span>-</span> Family Friendly <span>-</span> Close to local attractions &amp; beaches <span>-</span> Farm Experience <span>-</span> Outstanding Views <span>-</span> Baby sitting <span>-</span> Meal on arrival
				</div>';
			?>
			
			<section id="main" class="right">
				<?php
					if (!$_GET['p'] || $_GET['p'] == '')
						include 'pages/home.php';
					else
						include 'pages/' . strtolower($_GET['p']) . '.php';
				?>
			</section>
			
			<aside id="aside" class="left">
				<?php
					if (!$_GET['p'] || $_GET['p'] == '')
						include 'pages/home.aside.php';
					else
						include 'pages/' . strtolower($_GET['p']) . '.aside.php';
				?>
			</aside>
		</div>
	  </div>
	</main>
	
	<footer id="footer">
		<span class="right">
			Website developed by 
			<br><a href="http://usrnix.net/">Joe &amp; Val</a>
		</span>
	</footer>
	
	<div id="ftout">
		<span>
			&copy; Allender Farm 2014
		</span>
		
		<div id="right2" class= "right">
			<a href="?p=TermsAndConditions">
				Terms &amp; Conditions
			</a>
		
			<a href="?p=ContactUs">
				Contact us
			</a>
		</div>
	</div>
 </body>
</html>
