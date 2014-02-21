<?php theme_include('header'); ?>

		<div class="container article-single">
			<div class="box-12">

				<h1><?php echo article_title(); ?></h1>
			 	<small>Nedkladdat av <?php echo article_author();?> den <?php echo article_date(); ?></small>


				<?php echo article_markdown(); ?>

				<!-- change your twitter name in functions.php -->
				<a target="_blank" href="http://twitter.com/share?url=<?php echo full_url(); ?>&text=<?php echo article_title(); ?>&via=<?php echo twitter_account(); ?>" class="btn-posts twitter"><i class="fa fa-twitter"></i> Tweet This</a>

			</div>

		<?php if(comments_open()): ?>
		<div class="box-12 nocomments">
			<?php echo total_comments() . pluralise(total_comments(), ' comment'); ?> 
		</div>

		<div class="comments box-12">
			<?php if(has_comments()): ?>
			<ul class="commentlist">
				<?php $i = 0; while(comments()): $i++; ?>
				<li class="comment" id="comment-<?php echo comment_id(); ?>">
						<h2><?php echo comment_name(); ?></h2>
						<time><?php echo relative_time(comment_time()); ?></time>

						<div class="content">
							<p>
								<?php echo comment_text(); ?>
							</p>
						</div>

						<!--<span class="counter"><?php echo $i; ?></span>-->
				</li>
				<?php endwhile; ?>
			</ul>
			<?php endif; ?>

			<form id="comment" class="commentform" method="post" action="<?php echo comment_form_url(); ?>#comment">
				<?php echo comment_form_notifications(); ?>

				<p class="name">
					<label for="name">Your name:</label>
					<?php echo comment_form_input_name('placeholder="Your name"'); ?>
				</p>

				<p class="email">
					<label for="email">Your email address:</label>
					<?php echo comment_form_input_email('placeholder="Your email (won’t be published)"'); ?>
				</p>

				<p class="textarea">
					<label for="text">Your comment:</label>
					<?php echo comment_form_input_text('placeholder="Your comment"'); ?>
				</p>

				<p class="submit">
					<?php echo comment_form_button(); ?>
				</p>
			</form>
		</div>
		</div>
		<?php endif; ?>

<?php theme_include('footer'); ?>