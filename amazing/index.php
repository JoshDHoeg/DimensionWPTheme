<?php get_header(); ?>

<!-- <h1>dude this shit is starting to get a little easier</h1> -->
<div id="primary" class="content-area">
	<main id="main" class="site-main row" role="main">
		<div class="sub-feature col-md-12">
			<div id="slide" class="flex-slider">
				<ul class="slides">

				</ul>
			</div>
		</div>
		<div class="latest-posts">
			<?php if( have_posts() ): ?>

				<?php while( have_posts() ): the_post(); ?>

					<?php get_template_part('content',get_post_format()); ?>

				<?php endwhile;?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>
		</div>

	</main>
</div>




<!--asdfasdfasdfasdfasdfasdfasdfasd----------->


<!-- <?php get_footer(); ?> -->
