<div class="col-12 col-md-6 col-lg-4">
  <div class="card mb-4">
    <a href="<?= the_permalink(); ?>">
      <img class="card-img-top" src="<?= get_bloginfo('wpurl') . '/wp-content/uploads/' .get_post_meta($post->ID, 'thumbnail', true); ?>" alt="React tutorial header image">
    </a>
    <div class="card-body">
      <small class="text-muted"><?= the_date(); ?></small>
      <h5 class="card-title">
        <a href="<?= the_permalink(); ?>">
          <?= the_title(); ?>
        </a>
      </h5>
      <div class="card-foot">
        <div class="d-flex justify-content-between align-items-center">
          <span class="card-next-button">
            <a href="<?= the_permalink(); ?>">
              Read more →
            </a>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
