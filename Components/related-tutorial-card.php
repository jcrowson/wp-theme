<div class="featured-card shadow-sm card mt-2 mb-4">
  <a onClick="gtag('event', 'click', { 'event_category': 'related tutorial', 'event_label': '<?= the_title(); ?>' });" href="<?= the_permalink(); ?>">
    <img class="related-tutorial-card-img" src="<?= get_bloginfo('wpurl') . '/wp-content/uploads/' .get_post_meta($post->ID, 'thumbnail', true); ?>" alt="Related tutorial Image">
  </a>
</div>
