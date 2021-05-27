<?php
	$event = get_event();
	$corp = get_corporate_site();
	$type = get_field('event_type', $event->ID);
	$cobrand = empty($type) ? "bln" : $type;
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri()."/".$cobrand; ?>_favicon.png" />
<title><?php wp_title(); ?></title>
<?php wp_head(); ?>
<?php do_action('insert_ga_script'); ?>

<style type="text/css">
	#navbar {
		z-index: 999;
	}
	
	.nav-2021 .container-full-width {
		background: #fff;
		padding: 40px 0;
	}

	.nav-2021 .main_menu {
		float: right;
		margin-top: 5px;
	}


	.nav-2021 .main_menu a {
		color: #000;
		font-size: 18px;
	}

	.nav-2021 .logo-2021 {
		width: 230px;
		float: left;
	}

	.nav-2021 .main_menu a.active, .nav-2021 .main_menu a:hover {
		background: #fff !important;
		color: rgb(238,93,49) !important;
	}

	.nav-2021 .main_menu a.active:after, .nav-2021 .main_menu a:hover:after {
		border-color: #fff !important;
	}

	.nav-2021 .slicknav_menu {
		background-color: #fff;
		float: right;
	    width: 100px;
	}

	.nav-2021 .slicknav_menu a:hover .slicknav_icon-bar {
	    background-color: rgb(238,93,49) !important;
	}

	.nav-2021 .slicknav_menu .slicknav_icon-bar {
		background-color: #000;
		box-shadow: none;
	}

	.nav-2021 .slicknav_nav {
		text-align: right;
	    margin-right: 5px;
	    margin-top: 60px;
	}

	.nav-2021 .slicknav_nav a {
		color: #000;
	}

	.nav-2021 .slicknav_nav a:hover {
		color: rgb(238,93,49);
		background: #fff;
	}

	.nav-2021 .nav-cart {
		padding-left: 31px; 
		background-image: url('https://businessofsoftware.org/wp-content/themes/bln-conference/css/cart.png'); 
		background-repeat: no-repeat; 
		background-size: 30px; 
		background-position-y: 4px; 
		padding-top: 8px;
	}

	.nav-2021 .nav-cart a {
		border-radius: 15px; 
		padding: 3px 8px; 
		font-size: 13px; 
		background: rgb(238,93,49); 
		color: #fff;
	}

	/* The sticky class is added to the navbar with JS when it reaches its scroll position */
	.sticky {
		position: fixed;
		top: 0;
		width: 100%;
	}

	.sticky-content {
		padding-top: 65px;
	}

	.sticky .container-full-width {
		padding: 10px 0;
	}

	.sticky .logo-2021 {
		width: 140px;
		margin-left: 20px;
	}

	.sticky .main_menu {
		margin-top: 0;
		margin-bottom: 5px;
	}

	.sticky .main_menu a {
		margin-top: 0;
		font-size: 16px;
	}

	@media (max-width: 768px) {
		.nav-2021 .logo-2021 {
			width: 150px;
		}

		.nav-2021 .container-full-width {
			padding: 20px 0;
		}

		.sticky .logo-2021 {
			margin-left: 0;
		}

	}
</style>

</head>
<body>

	<script type="text/javascript">
		$( document ).ready(function() {

			// When the user scrolls the page, execute myFunction
			window.onscroll = function() { myFunction() };

			// Get the navbar
			var navbar = document.getElementById( "navbar" );
			var pagecontent = document.getElementById( "sticky-title" );

			// Get the offset position of the navbar
			var sticky = navbar.offsetTop;

			// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
			function myFunction() {
				if (document.body.scrollTop > sticky || document.documentElement.scrollTop > sticky) {
					navbar.classList.add( "sticky" )
					pagecontent.classList.add( "sticky-content" )
				} else {
					navbar.classList.remove( "sticky" );
					pagecontent.classList.remove( "sticky-content" );
				}
			}
		});
	</script>

	<?php do_action('insert_gtm_script'); ?>
	<div class="<?php echo $type; ?>">
		<div class="bk-0">

			<nav id="navbar" class="nav-2021">

				<div class="container-full-width bk-white" id="notif-bar" style="padding: 15px 0; text-align: center; background: #000; color: #fff;">
					📣 New Masterclasses: 

					<a href="https://businessofsoftware.org/events/#masterclasses" style="font-weight: bold; text-decoration: underline; color: #fff;">
						Demand-Side Sales
					</a>

					and

					<a href="https://businessofsoftware.org/events/#masterclasses" style="font-weight: bold; text-decoration: underline; color: #fff;">
						Customer Interviews
					</a> 

					with Bob Moesta.
				</div>

				<div class="container-full-width bk-white shadow" id="navbar-child">
			        <div class="container-outer">
			            <div class="container-inner clearfloat">

			            	<a href="/">
			            		<img src="https://businessofsoftware.org/wp-content/themes/bln-corporate/event-images/bos_logo_name_color_plain.svg" class="logo-2021" />
			                </a>

			                <?php 
			                	//echo get_main_menu($event); 

								$uri = explode('/', $_SERVER["REQUEST_URI"]);
								$req = strtolower($uri[1]);

								if($req == '') {
								    $req = "home";
								}
								else if(is_numeric($req)) {
								    $req = "blog";
								}
			                ?>

			                <ul id="menu" class="main_menu">
			                	<li>
			                		<?php 
										$slug = 'events';
										$active = ($slug == $req) ? ' class="active"' : '';
									?>
			                		<a href="/events" <?=$active?> >Events</a>
			                	</li>
			                	<li>
			                		<?php 
										$slug = 'videos';
										$active = ($slug == $req) ? ' class="active"' : '';
									?>
			                		<a href="/videos" <?=$active?> >Talks</a>
			                	</li>
			                	<li>
			                		<?php 
										$slug = 'blog';
										$active = ($slug == $req) ? ' class="active"' : '';
									?>
			                		<a href="/blog" <?=$active?> >Blog</a>
			                	</li>
			                	<li>
			                		<?php 
										$slug = 'updates';
										$active = ($slug == $req) ? ' class="active"' : '';
									?>
			                		<a href="/updates" <?=$active?> >Join</a>
			                	</li>
			                	<?php 
        
								    if (WC()->cart->get_cart_contents_count() > 0) { ?>

										<li class="nav-cart">
								            <a href="<?php echo wc_get_cart_url(); ?>">
								                <?php echo WC()->cart->get_cart_contents_count(); ?>
								            </a>
								        </li>

								    <?php }
								?>
			                </ul>
			            </div>
			        </div>
			    </div>
			</nav>
