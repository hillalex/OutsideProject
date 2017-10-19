<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
    <title><?php echo get_bloginfo( 'title' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/style.css"/>
</head>

<body class="d-flex flex-column">

<header class="sticky-top header-main pb-2 mb-5">
    <div class="container-fluid exit-info d-none d-sm-block float-right">
        <span class="float-right">
        If you need to leave this website quickly, click the purple 'Quick Exit' button below or press the escape key.
        </span>
    </div>
    <nav class="navbar navbar-expand pr-md-5 pl-md-5 mt-2" role="navigation">
        <a class="navbar-brand mb-4" href="/"><img
                    src="<?php bloginfo( 'template_directory' ); ?>/images/logo_small.png"
                    alt="The UK's first LGBTQI+ homeless/crisis winter shelter"/></a>
        <div class="navbar-main">
            <ul class="navbar-nav">
				<?php wp_nav_menu( array(
					'theme_location' => 'top-menu',
					'container'      => '',
					'items_wrap'     => '%3$s'
				) ); ?>
            </ul>
        </div>
    </nav>

</header>

<div class="container flex-grow">
