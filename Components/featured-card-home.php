<div class="card mb-4">
  <a href="<?= the_permalink(); ?>">
    <img class="card-img-top" src="<?= get_bloginfo('wpurl') . '/wp-content/uploads/' . get_post_meta($post->ID, 'thumbnail', true); ?>"  alt="React tutorial header image">
  </a>
  <div class="card-body">
    <small class="text-muted"><?= the_date(); ?></small>
    <h5 class="card-title">
      <a href="<?= the_permalink(); ?>">
        <?= the_title(); ?>
      </a>
    </h5>
  </div>
</div>