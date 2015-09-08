<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
		<script src="<?php echo get_template_directory(); ?>/js/lib/conditionizr-4.3.0.min.js"></script>
		<script src="<?php echo get_template_directory(); ?>/js/lib/modernizr-2.7.1.min.js"></script>
		<script src="<?php echo get_template_directory(); ?>/js/date_picker/picker.js"></script>
		<script src="<?php echo get_template_directory(); ?>/js/date_picker/picker.date.js"></script>
		<script src="<?php echo get_template_directory(); ?>/js/sideNav.js"></script>
		<script>
			$(document).ready(function(){
				$('.pushpin').pushpin({ top: $('.pushpin').offset().top });
			});
		</script>
		<?php wp_head(); ?>
		<script>
			// conditionizr.com
			// configure environment tests
			conditionizr.config({
				assets: '<?php echo get_template_directory_uri(); ?>',
				tests: {}
			});
		</script>
		<script>
			$(document).ready(function(){
				$(".button-collapse").sideNav();
			});
		</script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				<div class="navbar-fixed">
					<nav>
						<div class="nav-wrapper">
							<!-- logo -->
							<a href="<?php echo home_url(); ?>">
								<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
							</a>
							<!-- /logo -->
							<a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
							<!-- nav -->
							<?php material_nav(); ?>
							<!-- /nav -->
						</div>
					</nav>
				</div>


			</header>
			<!-- /header -->
