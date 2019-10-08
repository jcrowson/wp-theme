<?php
  $args = array(
    'tag' => 'react-hooks',
    'posts_per_page' => 4,
  );
  $post_query = new WP_Query($args);
  if($post_query->have_posts() ) {
    while($post_query->have_posts() ) {
      $post_query->the_post();
      include(__DIR__ . '/../../tutorial-card.php');
    }
  }

