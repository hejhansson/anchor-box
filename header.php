<!doctype html>
<html lang="en">
	<head>
	<meta charset="utf-8">
	<title><?php echo site_name(); ?> — <?php echo page_title('Page can’t be found'); ?></title>

	<meta name="description" content="<?php echo site_description(); ?>">

	<link rel="stylesheet" href="<?php echo theme_url('/libs/animate.css/animate.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo theme_url('/libs/font-awesome/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo theme_url('libs/normalize-css/normalize.css'); ?>">
	<link rel="stylesheet" href="<?php echo theme_url('/css/box.min.css'); ?>">

	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
	<link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">

	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="<?php echo asset_url('/js/zepto.js'); ?>"></script>

	<!--meta-->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<meta property="og:title" content="<?php echo site_name(); ?>">
	<meta property="og:type" content="website">
	<meta property="og:url" content="<?php echo e(current_url()); ?>">
	<meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	<meta property="og:site_name" content="<?php echo site_name(); ?>">
	<meta property="og:description" content="<?php echo site_description(); ?>">
	<meta name="description" content="<?php echo site_description(); ?>">
	<meta name="keywords" content="">


	</head>
	<body class="<?php echo body_class(); ?>">
			<header id="top">
				<div class="container">
					<div class="box-12">

						<a id="logo" href="<?php echo base_url(); ?>"><?php echo site_name(); ?></a>

						<?php if(has_menu_items()): ?>
						<nav id="main" role="navigation">
							<ul>
								<?php while(menu_items()): ?>
								<li <?php echo (menu_active() ? 'class="active"' : ''); ?>>
									<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>">
										<?php echo menu_name(); ?>
									</a>
								</li>
								<?php endwhile; ?>
							</ul>
						</nav>
					<?php endif; ?>
					</div>
				</div>
			</header>