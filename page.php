<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main role="main">
  <section class="jumbotron post-hero-banner text-center">
    <div class="container container-small">
      <h1 class="jumbotron-heading"><?php the_title() ?></h1>
    </div>
  </section>

  <div class="page-content">
    <div class="content">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-sm-12 col-md-12 col-xl-8">
            <?php the_content(); ?>
            <?php endwhile; else : ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="container container-small">
      <hr />
      <div class="row my-4">
        <div class="monthly-newsletter-box text-center">
          <div class="col">
            <h2 class="mt-0 pt-0">📬 Join the Upmostly Newsletter</h2>
            Get one email a month, packed with our latest React tutorials, delivered straight to your inbox.
          </div>
          <form action="https://wplogic.us18.list-manage.com/subscribe/post?u=7806e537fd7c0d111ed32b4a6&amp;id=c4ae659733" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" validate>
            <div class="input-group my-3">
              <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Your Email Address" required>
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" onClick="ga('send', 'event', 'cta', 'Click', 'In Page Newsletter', '0');">Subscribe</button>
              </div>
            </div>
            <small>Zero spam, just great content. Unsubscribe at <i>any</i> time.</small>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
