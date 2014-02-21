<?php if(footer_latest_posts()): ?>
<h2><a href="<?php echo article_url(); ?>"><?php echo article_title(); ?></a></h2>
<small>published <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></small>
<?php endif; ?>