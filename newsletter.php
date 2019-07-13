<?php /* Template Name: Newsletter */ ?>

<?php get_header(); ?>

<main role="main" class="pt-5">
  <section class="jumbotron d-flex justify-content-between align-items-center hero-banner hero-banner-blog">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <img style="width: 200px;" src="https://upmostly.com/wp-content/uploads/react-newsletter-mailbox.png" alt="A mailbox with two letters, showing React logos" />
        </div>
        <div class="col-12 col-md-8 offset-md-2 mt-3 text-center">
          <h1>A Monthly React Newsletter, Packed With Tutorials</h1>
          <h2 class="pt-0 pb-0 mb-0 d-none d-md-block">
            Join 100s of other devs who get our latest React tutorials, every month, straight to their inbox.
          </h2>
        </div>
        <div class="col-12 col-md-6 offset-md-3 text-center mt-0 mt-md-4">
          <p class="d-block d-md-none">Join 100s of other devs who get our latest React tutorials, every month, straight to their inbox.</p>
          <form action="https://wplogic.us18.list-manage.com/subscribe/post?u=7806e537fd7c0d111ed32b4a6&amp;id=c4ae659733" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" validate>
            <div class="input-group mb-3">
              <input type="email" class="form-control form-control-sm" name="EMAIL" id="mce-EMAIL" placeholder="Your Email Address" required>
              <div class="input-group-append">
                <button class="btn btn-sm btn-primary" type="submit" onClick="gtag('event', 'join', { 'event_category': 'newsletter', 'event_label': 'newsletter page' });">Sign Me Up!</button>
              </div>
            </div>
          </form>
          <small class="d-none d-md-block text-muted">Never any spam, just great tutorials. Unsubscribe at any time.</small>
        </div>
      </div>
    </div>
  </section>
  <div class="album mt-2 pb-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="pb-0 text-center text-md-left text-muted">Get original React tutorials, like these:</h3>
        </div>
      </div>
      <div class="row mt-4">
        <?php include('Components/top-three-tutorials.php') ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
