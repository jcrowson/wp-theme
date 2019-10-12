<div class="mb-3 text-muted">
  🏆 Most Read
</div>
<?php
  $args = array(
    'post__in' =>  array(2206, 1556, 1203, 1776, 1675, 1101, 1428),
    'orderby' => 'post__in',
  );
  $most_read_query = new WP_Query($args);
  if($most_read_query->have_posts() ) {
    $i = 0;
    while($most_read_query->have_posts() ) {
      $i ++;
      $most_read_query->the_post();
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
  wp_reset_postdata();
?>