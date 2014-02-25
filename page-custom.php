<?php theme_include('header'); ?>

		<div class="container page-top">
			<div class="box-12">

			<?php echo page_content(); ?>
			<p>Custom page</p>

			<form id="comment" action="//api.formspree.com/you@email.com">
			    <input type="text" name="name">
			    <input type="email" name="_replyto">
			    <input class="btn-posts" type="submit" value="Send">
			</form>
			
			</div>
		</div>

<?php theme_include('footer'); ?>