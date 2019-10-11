<?php
  $tag = get_queried_object();
  $args = array(
    'tag' => $tag->slug,
    'posts_per_page' => -1,
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
