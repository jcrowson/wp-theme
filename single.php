<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main role="main">
  <section class="jumbotron post-hero-banner text-center">
    <div class="container container-small">
      <h1 class="jumbotron-heading"><?php the_title() ?></h1>
      <div class="author text-muted mb-3">
        <img class="rounded-circle mr-2" src="https://upmostly.com/wp-content/uploads/james-headshot.jpg" />
        James King
      </div>
      <p class="author-date lead mb-2"><?php the_date() ?> / <a href="#comments">Leave a comment</a></p>
    </div>
  </section>

  <div class="page-content">
    <div class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 col-xl-4 offset-xl-4">
            <?php the_content(); ?>
            <?php endwhile; else : ?>
            <?php endif; ?>
          </div>
          <div class="col-xl-4">
            <div class="floating-wrapper">
              <div class="floating-related-post">
                You might also like...
                <div class="featured-card card mt-2 mb-4">
                  <a href="<?= the_permalink(); ?>">
                    <img class="card-img-top featured-card-img" src="<?= get_bloginfo('wpurl') . '/wp-content/uploads/' .get_post_meta($post->ID, 'thumbnail', true); ?>" alt="Card Image">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container container-small">
      <hr />
      <div class="row my-4">
        <div class="monthly-newsletter-box text-center">
          <div class="col">
            <h2 class="mt-0 pt-0">📮 Join the Upmostly Newsletter</h2>
            Get one email a month, packed with our latest React tutorials, delivered straight to your inbox.
          </div>
          <form action="https://wplogic.us18.list-manage.com/subscribe/post?u=7806e537fd7c0d111ed32b4a6&amp;id=c4ae659733" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" validate>
            <div class="input-group my-3">
              <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Your Email Address" required>
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Subscribe</button>
              </div>
            </div>
            <small>Zero spam, just great content. Unsubscribe at <i>any</i> time.</small>
          </form>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col text-muted">
          <h3>👉 Related Tutorials</h3>
        </div>
      </div>
      <div class="row mt-2 mb-5">
        <?php
          $currentPostId = get_the_ID();
          $args = array(
            'posts_per_page' => 3,
        'post_type' => 'post',
        'post__not_in' => array($currentPostId)
        );
        $post_query = new WP_Query($args);
        if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
        $post_query->the_post();
        ?>
        <?php include('Components/tutorial-card.php'); ?>
        <?php
            }
          }
          wp_reset_postdata();
        ?>
      </div>
    </div>

    <div class="container container-small">
      <div class="row">
        <div class="col-md-12">
          <hr />
          <?php
            comments_template();
          ?>
        </div>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>
