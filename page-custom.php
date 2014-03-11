<?php theme_include('header'); ?>

		<div class="container page-top">
			<div class="box-12">

			<?php echo page_content(); ?>
			<p>Custom page</p>

			<? // Get posts by category ?>
			<?php while(hansson_posts_by_category('test')): ?>
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
	
						
			
			</div>
		</div>

<?php theme_include('footer'); ?>