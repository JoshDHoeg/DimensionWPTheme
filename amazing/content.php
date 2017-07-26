<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- <header class="entry-header">
		<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h1>' ); ?>
		<small>Posted on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?>, in <?php the_category(); ?></small>
	</header> -->

	<div class="container-fluid">

		<?php if( has_post_thumbnail() ): ?>

			<div class="">
				<div class="thumbnail"><?php the_post_thumbnail('medium'); ?></div>
			</div>
			<div class="">
				<?php the_content(); ?>
			</div>

		<?php else: ?>

			<div class="">
				<?php the_content(); ?>
			</div>

		<?php endif; ?>
	</div>

</article>
