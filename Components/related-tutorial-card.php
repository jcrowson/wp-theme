<div class="featured-card shadow-sm card mt-2 mb-4">
  <a onClick="ga('send', 'event', 'cta', 'Click', 'Related Tutorial', '0');" href="<?= the_permalink(); ?>">
    <img class="related-tutorial-card-img" src="<?= get_bloginfo('wpurl') . '/wp-content/uploads/' .get_post_meta($post->ID, 'thumbnail', true); ?>" alt="Card Image">
  </a>
</div>
