<?php
  $args = array(
    'category_name' => single_cat_title( '', false ),
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
?>
