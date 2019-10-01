<div class="floating-related-post">
  <div class="text-muted mb-3">
    💻 More React Tutorials
  </div>
  <?php
  $post_objects = get_field('related_tutorials');
  if( $post_objects ): ?>
    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
      <?php setup_postdata($post); ?>
      <?php include('related-tutorial-link.php'); ?>
    <?php endforeach; ?>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
  <?php endif;
  ?>
  <a href="/tutorials" style="color: #64b6cd;">
    <small><i class="fab fa-react mr-1 tutorials"></i> All React Tutorials</small>
  </a>
</div>