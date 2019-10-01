<?php
  $currentPostId = get_the_ID();
  $args = array(
    'posts_per_page' => 3,
    'post_type' => 'post',
    'post__not_in' => array($currentPostId)
  );
  $post_query = new WP_Query($args);
  if($post_query->have_posts() ) {
    while($post_query->have_posts() ) {
      $post_query->the_post();
      ?>
      <?php include('related-tutorial-link.php'); ?>
      <?php
    }
  }
  wp_reset_postdata();
?>