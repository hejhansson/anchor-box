<?php theme_include('header'); ?>

<div class="container">



	<?php if(has_posts()): ?>

		<ul class="items">
			<?php while(posts()): ?>
			<li>
					<h1>
						<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title();  ?> —</a>
					</h1>	
					
					<small>
						<?php echo article_date(); ?>
					</small>

					<div class="content">

						<?php 
						$rest = substr(article_markdown(), 0, 248);
						echo $rest . "...";
						?>
							<a class="btn-posts" href="<?php echo article_url(); ?>">Read more <i class="fa fa-angle-right"></i></a>
					</div>

			</li>
			<?php endwhile; ?>
		</ul>

		<?php if(has_pagination()): ?>
		<div class="box-12 pagination">
			<div class="wrap">
				<?php echo posts_prev(); ?>
				<?php echo posts_next(); ?>
			</div>
		</div>
		<?php endif; ?>

	<?php else: ?>
		<p>Looks like you have some writing to do!</p>
	<?php endif; ?>

</div>

<?php theme_include('footer'); ?>