<?php
get_header();
$comments = get_comments_number();
$post_tags = get_the_tags();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main role="main" class="pt-5">
  <article>
    <section class="jumbotron post-hero-banner text-center">
      <aside class="container container-small">
        <h1 class="jumbotron-heading"><?php the_title() ?></h1>
        <time datetime="<?php echo get_the_date( 'c' ); ?>">
          <?php the_date() ?>
        </time>
        /
        <a href="#comments"><?php echo ($comments == 0) ? "Leave a comment" : $comments . " comment" . ($comments > 1 ? 's' : null) ?></a>
        <div class="category-tags">
          <?php
          if ($post_tags) {
            foreach(get_the_tags($post->ID) as $tag) {
              if ($tag->name !== react) {
                echo '<span class="category-tag"><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a></span>';
              }
            }
          }
          ?>
        </div>
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
                <div class="sidebar-newsletter mb-4">
                  <span class="text-muted">
                   📬 Monthly React Newsletter
                  </span>
                  <form action="https://wplogic.us18.list-manage.com/subscribe/post?u=7806e537fd7c0d111ed32b4a6&amp;id=c4ae659733" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" validate>
                    <div class="input-group mt-3 mb-2">
                      <input type="email" class="form-control form-control-sm" name="EMAIL" id="mce-EMAIL" placeholder="Your Email" required>
                      <div class="input-group-append">
                        <button class="btn btn-sm btn-primary" type="submit" onClick="gtag('event', 'join', { 'event_category': 'newsletter', 'event_label': 'sidebar' });">Subscribe</button>
                      </div>
                    </div>
                  </form>
                  <div class="text-muted newsletter-small-text">Don't miss the latest React tutorials. No spam, ever. Opt out at any time.</div>
                </div>
                <div class="floating-related-post">
                  <a href="https://www.siteground.com/go/0u0ewikzwx" onClick="gtag('event', 'click',
                  {'event_category': 'banner ad', 'event_label': 'siteground-design-a' });">
                    <img style="width: 100%;" src="https://upmostly.com/wp-content/uploads/siteground-banner-design-a@2x.jpg" alt="An advert for siteground web hosting" />
                  </a>
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
              <h2 class="mt-0 pt-0 no-underline">📬 The Monthly Upmostly Newsletter</h2>
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
        <?php include(__DIR__ . '/../Components/author-section.php'); ?>
      </div>
      <div class="container d-xl-none">
        <div class="row">
          <div class="col text-muted">
            <h3 class="mt-1">💻 More React Tutorials</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <?php include(__DIR__ . '/../Components/related-tutorials-mobile.php'); ?>
          </div>
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