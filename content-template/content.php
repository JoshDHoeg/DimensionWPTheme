<h3><?php>the_title();?><h3>
  <div class="thumbnail-image"><?php the_post_thumbnail('thumbnail'); ?></div>
<small>Posted on: <?php the_time('F j, y'); ?> at <?php the_time(); ?></small>

<p><?php the_content();  ?></p>
