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
</head>
<body>
	<?php do_action('insert_gtm_script'); ?>
	<div class="<?php echo $type; ?>">
		<div class="bk-0">

			<nav>
			     <div class="container-full-width">
			        <div class="container-outer">
			            <div class="container-inner clearfloat">
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
										$slug = 'home';
										$active = ($slug == $req) ? ' class="active"' : '';
									?>
									<a href="/home" <?=$active?> >Home</a>
			                	</li>
			                	<li>
			                		<?php 
										$slug = 'conferences';
										$active = ($slug == $req) ? ' class="active"' : '';
									?>
			                		<a href="/conferences" <?=$active?> >Events</a>
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
			                </ul>
			            </div>
			        </div>
			    </div>
			</nav>