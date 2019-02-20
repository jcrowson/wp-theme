<?php
  $args = array(
    'category_name' => 'tutorials',
    'tag' => 'react',
    'meta_key' => 'featured_on_homepage',
    'meta_value' => 0,
  );
  $post_query = new WP_Query($args);
  if($post_query->have_posts() ) {
    while($post_query->have_posts() ) {
      $post_query->the_post();
  ?>
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card mb-4 text-center" onclick="location.href = '<?= the_permalink(); ?>'">
      <a href="<?= the_permalink(); ?>">
        <img class="card-img-top" href="<?= the_permalink(); ?>" src="<?= get_bloginfo('wpurl') . '/wp-content/uploads/' .get_post_meta($post->ID, 'thumbnail', true); ?>" alt="Card Image">
      </a>
      <div class="card-body">
        <a href="<?= the_permalink(); ?>"><h5 class="card-title"><?= the_title(); ?></h5></a>
        <div class="card-foot">
          <div class="d-flex justify-content-between align-items-center">
            <small class="text-muted"><?= the_date(); ?></small>
            <span class="badge badge-primary"><?= get_post_meta($post->ID, 'topic', true); ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
    }
  }
?>
