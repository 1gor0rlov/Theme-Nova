
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php get_bloginfo('name'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <?php wp_head(); ?>
    </head>
    <body>

		<div class="nav-container">




		    <nav>
		        <div class="nav-bar">
		            <div class="module left">
		                <a href="<?php network_site_url('/'); ?>">
		                    <img class="logo logo-light" alt="Foundry" src="<?php echo get_template_directory_uri(); ?>/img/logo-light.png">
		                    <img class="logo logo-dark" alt="Foundry" src="<?php echo get_template_directory_uri(); ?>/img/logo-dark.png">
		                </a>
		            </div>
		            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
		                <i class="ti-menu"></i>
		            </div>
		            <div class="module-group right">
		                <div class="module left">
                      <?php $nav = array('theme_location' => 'navigation-menu');
                      wp_nav_menu($nav); ?>

		                </div>

		                <div class="module widget-handle language left">
		                    <ul class="menu">
		                        <li class="has-dropdown">
		                            <a href="#">ENG</a>
		                            <ul>
		                                <li>
		                                    <a href="#">French</a>
		                                </li>
		                                <li>
		                                    <a href="#">Deutsch</a>
		                                </li>
		                            </ul>
		                        </li>
		                    </ul>
		                </div>
		            </div>

		        </div>
		    </nav>




		</div>
