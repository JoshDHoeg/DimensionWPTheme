<article id="post-<?php the_ID(); ?>" <?php post_class('container col-xs-12'); ?>>
		<?php if( has_post_thumbnail() ): ?>
			<div class="content-item">
				<!-- <div class="content-title"></div> -->
				<div class="thumbnail"><a href="" data-toggle="modal" data-target="#post-detail-<?php the_ID(); ?>"><h1><?php the_title() ?></h1><?php the_post_thumbnail('small'); ?></a></div>
			</div>
		<?php else: ?>
			<div class="">
				<!-- <?php the_content(); ?> -->
			</div>
		<?php endif; ?>

		<div class="modal fade <?php post_class('container'); ?>" id="post-detail-<?php the_ID(); ?>" tabindex="-1" role="dialog" aria-labelledby="purchaseLabel" aria-hidden="true">
				<div class="modal-dialog">
						<div class="modal-content">
								<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title"><?php the_title() ?></h4>
								</div>
								<div class="modal-body">
									<?php if( has_post_thumbnail() ): ?>
										<?php the_content(); ?>
									<?php else: ?>
											<?php the_content(); ?>
									<?php endif; ?>
								</div>
								<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
						</div>
				</div>
		</div>
</article>
