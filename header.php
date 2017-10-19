<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
    <title><?php echo get_bloginfo( 'title' ); ?></title>
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/style.css"/>
</head>

<body>

<header class="header-main navbar-fixed-top navbar">
    <div class="container-fluid exit-info hidden-xs">
        <span class="pull-right">
        If you need to leave this website quickly, click the purple 'Quick Exit' button below or press the escape key.
        </span>
    </div>

    <nav class="navbar">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img
                            src="<?php bloginfo( 'template_directory' ); ?>/images/logo_small.png"
                            alt="The UK's first LGBTQI+ homeless/crisis winter shelter"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-main collapse navbar-collapse pull-right" id="navbar-collapse-1">
                <ul class="nav navbar-nav">
		            <?php wp_nav_menu( array(
			            'theme_location' => 'top-menu',
			            'container'      => '',
			            'items_wrap'     => '%3$s'
		            ) ); ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>

<div class="container">
