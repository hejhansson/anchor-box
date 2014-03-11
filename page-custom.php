<?php theme_include('header'); ?>

		<div class="container page-top">
			<div class="box-12">

			<?php echo page_content(); ?>
			<p>Custom page</p>

			<? // Get posts by category ?>
			<?php while(posts_by_category('test')): ?>
				<h1><?php echo article_title(); ?></h1>
				<?php echo article_markdown(); ?>
			<?php endwhile; ?>

			<? // Get custom fields for post ?>
			<?php if (article_custom_field('post_img')): ?>
				<?php echo "<img src='"; ?>
				<?php echo article_custom_field('post_img'); ?>
				<?php echo "'>"; ?>
 			<?php endif; ?>

			<? // Get custom fields for page ?>
 			<?php if (page_custom_field('page_img')): ?>
				<?php echo "<img src='"; ?>
				<?php echo page_custom_field('page_img'); ?>
				<?php echo "'>"; ?>
 			<?php endif; ?>

			<? // Get latest post ?>
 			<?php while(latest_post()): ?>
				<h1><?php echo article_title(); ?></h1>
				<?php echo article_markdown(); ?>
			<?php endwhile; ?>

			<? // Custom field with fallback ?>
			<?php echo article_custom_field('featured-image', 'http://www.wallope.com/wp-content/uploads/textures-wallpapers-334-free-wood-texture-grunge-wood-picture.jpg'); ?>
			
			<? // Can use this instead of creating custom pages ?>
			<?php if(is_homepage()): ?>
				<? // Code ?>
			<?php endif; ?>


			</div>
		</div>

<?php theme_include('footer'); ?>