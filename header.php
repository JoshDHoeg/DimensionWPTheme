<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dimension Theme</title>

    <?php wp_head(); ?>

  </head>

  <?php if( is_home() ):
    $dimension_classes = array('dimension-class', 'my-class');
  else:
    $dimension_classes = array('not-dimension-class');
  endif;
  ?>
  <body <?php body_class($dimension_classes); ?>>

    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>

    <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="header_image">
