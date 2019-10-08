<div class="mb-3 text-muted">
  🏆 Most Read
</div>
<?php
  $args = array(
    'post__in' =>  array(1031, 1556, 1203, 1776, 1675, 721, 120, 354),
    'meta_value' => 1,
    'orderby' => 'post__in',
  );
  $post_query = new WP_Query($args);
  if($post_query->have_posts() ) {
    $i = 0;
    while($post_query->have_posts() ) {
      $i ++;
      $post_query->the_post();
      ?>
        <div class="featured-card mt-2 mb-4 d-flex">
            <span class="mr-3 most-read-number"><?php echo $i ?></span>
            <a style="color: black; font-size: .9rem" onClick="gtag('event', 'click', { 'event_category': 'most read link', 'event_label': '<?= the_title(); ?>' });" href="<?= the_permalink(); ?>">
              <?= the_title(); ?>
            </a>
        </div>
      <?php
    }
  }
?>