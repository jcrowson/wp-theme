<?php
  $args = array(
    'meta_key' => 'featured_on_homepage',
    'meta_value' => 1,
  );
  $post_query = new WP_Query($args);
  if($post_query->have_posts() ) {
    while($post_query->have_posts() ) {
      $post_query->the_post();
  ?>
  <div class="col-12 col-md-6 mt-5">
    <div class="featured-card card mb-4 text-center" onclick="location.href = '<?= the_permalink(); ?>'">
      <a href="<?= the_permalink(); ?>">
        <img class="card-img-top featured-card-img" href="<?= the_permalink(); ?>" src="<?= get_bloginfo('wpurl') . '/wp-content/uploads/' .get_post_meta($post->ID, 'thumbnail', true); ?>" alt="Card Image">
      </a>
    </div>
  </div>
  <?php
    }
  }
?>
