<?php get_header(); ?>

<!-- <h1>dude this shit is starting to get a little easier</h1> -->
<div id="primary" class="content-area">
	<main id="main" class="site-main row" role="main">
		<div class="latest-posts container col-xs-12">
			<div class="col-sm-6">
			<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) == 0) : $wp_query->next_post(); else : the_post(); ?>

			<?php get_template_part('content', get_post_format()); ?>

			<?php endif; endwhile; else: ?>
			<?php get_template_part( 'no-results', 'index' ); ?>
			<?php endif; ?>

			<?php $i = 0; rewind_posts(); ?>
			</div>
			<div class="col-sm-6">
			<?php if (have_posts()) : while(have_posts()) : $i++; if(($i % 2) !== 0) : $wp_query->next_post(); else : the_post(); ?>

			<?php get_template_part('content', get_post_format()); ?>

			<?php endif; endwhile; else: ?>
			<?php get_template_part( 'no-results', 'index' ); ?>
			<?php endif; ?>
		</div>
	</div>

	</main>
</div>






<?php get_footer(); ?>
