<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <nav class="navbar navbar-expand-sm fixed-top navbar-light bg-light">
                            <div class="container">
                                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                                    <?php bloginfo('name'); ?>
                                </a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbar-collapse">
                                    <?php wpbootstrapsass_nav(); ?>
                                </div>
                            </div>
                            <!-- /.container -->
                        </nav>
                    </div>
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
        <div class="header__main">
            <div class="col-3"></div>
            <div class="col-6"></div>
            <div class="col-2"></div>
        </div>

    </header>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear">



			</header>
			<!-- /header -->
