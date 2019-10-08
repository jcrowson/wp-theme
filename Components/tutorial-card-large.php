<div class="col-12 col-md-6 col-lg-4">
  <div class="card mb-4">
    <a href="<?= the_permalink(); ?>">
      <img class="card-img-top" src="<?= get_bloginfo('wpurl') . '/wp-content/uploads/' .get_post_meta($post->ID, 'thumbnail', true); ?>" alt="<?php echo get_post_meta($post->ID, '_wp_attachment_image_alt', true ); ?>">
    </a>
    <div class="card-body">
      <small class="text-muted"><?= the_date(); ?></small>
      <h5 class="card-title">
        <a href="<?= the_permalink(); ?>">
          <?= the_title(); ?>
        </a>
      </h5>
      <?= the_excerpt(); ?>
    </div>
  </div>
</div>