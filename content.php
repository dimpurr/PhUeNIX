<div class="post">
	<header class="post_header">
		<a href="<?php echo get_the_author_meta('user_url'); ?>">
			<?php echo get_avatar( get_the_author_meta('ID'), 44 ); ?>
		</a>
		<div class="post_auth">
			<a href="<?php echo get_the_author_meta('user_url'); ?>">
				<?php echo get_the_author_meta('nickname'); ?>
			</a>
			<?php echo get_the_author_meta('first_name'); ?>
			<?php echo get_the_author_meta('last_name'); ?>
			<?php echo get_the_author_meta('description'); ?>
		</div>
		<span class="post_category">
			<?php the_category(' ') ?>
			<?php echo category_description( get_the_category()[0] ); ?>
		</span>

		<h2 class="post_title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); the_time('y/m/j - H:i') ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<div class="post_time">
			<?php the_time('y/m/j H:i') ?>
		</div>
	</header>
	<div class="post_content">
		<?php if ( get_post_format() == 'quote' ) { ?>
		<a href="<?php the_permalink(); ?>">
			<?php the_content('Read More →'); ?>
		</a>
		<?php } else { ?>
		<?php the_content('Read More →'); ?>
		<?php }; ?>
	</div>
</div>