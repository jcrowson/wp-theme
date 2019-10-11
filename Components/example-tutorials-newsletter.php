<?php
  $myarray = array(1475, 1428, 1368);
  $args = array(
    'category_name' => 'tutorials',
    'tag' => 'react',
    'post__in' => $myarray,
  );
  $post_query = new WP_Query($args);
  if($post_query->have_posts() ) {
    while($post_query->have_posts() ) {
      $post_query->the_post();
  ?>
    <?php include('tutorial-card.php'); ?>
  <?php
    }
  }
  wp_reset_postdata();
?>
