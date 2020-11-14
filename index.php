<?php get_header(); ?>

<main role="main" class="pt-4">
  <section class="jumbotron d-flex justify-content-between align-items-center hero-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="hero-text">Level Up Your React Skills</h1>
          <h2 class="pt-0 pb-0 mb-0 no-underline">
            Upmostly brings you original React and JavaScript tutorials every week
          </h2>
        </div>
      </div>
    </div>
  </section>
  <div class="mt-4 pb-5">
    <div class="container">
      <div class="row d-none d-lg-flex">
        <div class="col-8">
          <div class="d-flex mb-4">
            <div class="card-body">
              <h2 class="no-underline mb-1">
                <a style="color: #404040" href="web-development/how-react-reignited-my-love-for-web-development">
                  How React Reignited My Love for Web Development
                </a>
              </h2>
              It’s about time I shared my reasons why I came back to web development after five years of iOS development, and why I attribute a lot of these reasons to React.
            </div>
            <a href="web-development/how-react-reignited-my-love-for-web-development">
              <img class="card-img-top" src="<?= get_bloginfo('wpurl') . '/wp-content/uploads/react-love-web-development.jpg' ?>" alt="The React logo next to a heart emoji and the fire emoji underneath.">
            </a>
          </div>
          <div class="row">
            <div class="col-6">
              <div class="card mb-4">
                <a href="tutorials/build-a-react-switch-toggle-component">
                  <img class="card-img-top" src="<?= get_bloginfo('wpurl') . '/wp-content/uploads/react-switch-toggle-component.jpg' ?>" alt="Two React Switch components of different colors.">
                </a>
              </div>
            </div>
            <div class="col-6">
              <div class="card mb-4">
                <a href="tutorials/how-to-use-the-setstate-callback-in-react">
                  <img class="card-img-top" src="<?= get_bloginfo('wpurl') . '/wp-content/uploads/react-setstate-callback.jpg' ?>" alt="React code showing how to use setState callback.">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <?php include ('Components/most-read-bar.php') ?>
        </div>
      </div>
      <div class="row my-4">
        <a class="col-12 col-md-6 col-lg-4 no-underline" href="tag/beginner-react-tutorials" onClick="gtag('event', 'click', { 'event_category': 'category link', 'event_label': 'Beginner React Tutorials' });">
          <div class="card category-card hover-pop mb-4" style="background-image: url('<?= get_bloginfo('wpurl') . '/wp-content/uploads/beginner-react-tutorials.jpg' ?>')">
            Beginner React Tutorials
          </div>
        </a>
        <a class="col-12 col-md-6 col-lg-4 no-underline" href="tag/advanced-react-tutorials" onClick="gtag('event', 'click', { 'event_category': 'category link', 'event_label': 'Advanced React Tutorials' });">
          <div class="card category-card hover-pop mb-4" style="background-image: url('<?= get_bloginfo('wpurl') . '/wp-content/uploads/advanced-react-tutorials.jpg' ?>')">
            Advanced React Tutorials
          </div>
        </a>
        <a class="col-12 col-md-6 col-lg-4 no-underline" href="tutorials" onClick="gtag('event', 'click', { 'event_category': 'category link', 'event_label': 'All React Tutorials' });">
          <div class="card category-card hover-pop mb-4" style="background-image: url('<?= get_bloginfo('wpurl') . '/wp-content/uploads/all-react-tutorials.jpg' ?>')">
            All React Tutorials
          </div>
        </a>
        <div class="col-6 d-none d-md-block d-lg-none">
          <div class="sidebar-newsletter mb-4">
              <span class="text-muted">
               📬 Monthly React Newsletter
              </span>
            <form action="https://wplogic.us18.list-manage.com/subscribe/post?u=7806e537fd7c0d111ed32b4a6&amp;id=c4ae659733" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" validate>
              <div class="input-group mt-3 mb-2">
                <input type="email" class="form-control form-control-sm" name="EMAIL" id="mce-EMAIL" placeholder="Your Email" required>
                <div class="input-group-append">
                  <button class="btn btn-sm btn-primary" type="submit" onClick="gtag('event', 'join', { 'event_category': 'newsletter', 'event_label': 'homepage' });">
                    Subscribe
                  </button>
                </div>
              </div>
            </form>
            <div class="text-muted newsletter-small-text">
              Don't miss our latest React tutorials. No spam, ever.
            </div>
          </div>
        </div>
      </div>
      <?php include ('Components/tutorials/list-tag-tutorials.php') ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
