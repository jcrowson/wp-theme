<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main role="main">
  <article>
    <section class="jumbotron post-hero-banner text-center">
      <aside class="container container-small">
        <h1 class="jumbotron-heading"><?php the_title() ?></h1>
        <div class="author-block text-muted mb-3">
          <img class="rounded-circle mr-2" src="https://upmostly.com/wp-content/uploads/james-headshot.jpg" />
          <span class="author">James King</span>
        </div>
        <p class="author-date lead mb-2"><?php the_date() ?> / <a href="#comments">Leave a comment</a></p>
      </aside>
    </section>
    <section class="page-content">
      <div class="content">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-12 col-xl-7">
              <?php the_content(); ?>
              <?php endwhile; else : ?>
              <?php endif; ?>
            </div>
            <div class="d-none d-xl-block col-xl-3">
              <div class="floating-wrapper">
                <div class="floating-related-post">
                  <span class="text-muted">
                    Related Tutorials 👇
                  </span>
                    <?php
                      $post_objects = get_field('related_tutorials');
                      if( $post_objects ): ?>
                          <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                              <?php setup_postdata($post); ?>
                              <?php include('Components/related-tutorial-card.php'); ?>
                          <?php endforeach; ?>
                          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                      <?php endif;
                    ?>
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
              <h2 class="mt-0 pt-0">📮 The Monthly Upmostly Newsletter</h2>
              One email a month, packed with the latest React tutorials, delivered straight to your inbox.
            </div>
            <form action="https://wplogic.us18.list-manage.com/subscribe/post?u=7806e537fd7c0d111ed32b4a6&amp;id=c4ae659733" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" validate>
              <div class="input-group my-3">
                <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Your Email Address" required>
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit" onClick="gtag('event', 'join', { 'event_category': 'newsletter', 'event_label': 'single page' });">Subscribe</button>
                </div>
              </div>
              <small>Zero spam, just great content. Unsubscribe at <i>any</i> time.</small>
            </form>
          </div>
        </div>
      </div>
      <div class="container d-xl-none">
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
    </section>

  </article>
</main>

<?php get_footer(); ?>
