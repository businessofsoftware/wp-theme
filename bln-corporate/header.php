<?php
    $event_type = get_field('event_type');
    $cobrand = empty($event_type) ? "bln" : $event_type;
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
<body class="preload-events-images">
    <?php do_action('insert_gtm_script'); ?>
    <div class="<?php echo $cobrand; ?>">
        <div class="bk-0">

            <header>
                <div class="container-full-width">
                    <div class="container-inner clearfloat">
                        <a class="bln-name-white" href="https://businessofsoftware.org">BLN</a>
                        <p><strong>The BLN is now Business of Software</strong></p>
                    </div>
                </div>
            </header>

            <nav>
                 <div class="container-full-width">
                    <div class="container-outer">
                        <div class="container-inner clearfloat">

                            <?php
                                $match = explode('/', $_SERVER["REQUEST_URI"]);
                                $title = strtolower($match[1]);
                                
                                switch ($title)
                                {
                                    case '':
                                    $active = 'home';
                                    break;

                                    case 'events':
                                    case 'event':
                                    $active = 'events';
                                    break;

                                    case 'talks':
                                    case 'talk':
                                    $active = 'talks';
                                    break;

                                    case 'speakers':
                                    case 'speaker':
                                    $active = 'speakers';
                                    break;

                                    default:
                                    $homes = array("join", "team", "privacy", "terms", "enquiries", "sponsorship", "speaking", "media");
                                    $active = (in_array($title, $homes)) ? 'home' : 'blog';
                                    break;
                                }
                            ?>

                                <div class="mobile-home">
                                    <a class="bln-name-white" href="<?php echo get_corporate_site(); ?>"> </a>
                                </div>

                                <ul id="menu" class="main_menu">
                                    <li><a <?php if($active == "home") echo 'class="active"'; ?> href="/">Home</a></li>
                                    <li><a <?php if($active == "about") echo 'class="active"'; ?> href="/about/">About</a></li>
                                    <li><a <?php if($active == "events") echo 'class="active"'; ?> href="/events/">Events</a></li>
                                    <li><a <?php if($active == "talks") echo 'class="active"'; ?> href="/talks/">Talks</a></li>
                                    <li><a <?php if($active == "speakers") echo 'class="active"'; ?> href="/speakers/">Speakers</a></li>
                                    <li><a <?php if($active == "blog") echo 'class="active"'; ?> href="/blog/">Blog</a></li>
                                </ul>

                                <ul class="social">
                                    <li><a class="linkedin" href="http://www.linkedin.com/groups/BLN-86169"></a></li>
                                    <li><a class="facebook" href="https://www.facebook.com/TheBLN"></a></li>
                                    <li><a class="twitter" href="https://twitter.com/The_BLN"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>

