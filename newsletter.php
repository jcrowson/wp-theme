<?php /* Template Name: Newsletter */ ?>

<?php get_header(); ?>

<main role="main">
  <section class="jumbotron d-flex justify-content-between align-items-center hero-banner hero-banner-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>The Best React Tutorials, Packed into One Monthly Newsletter</h1>
          <h2 class="pt-0 pb-0 mb-0 d-none d-md-block">
            Get our latest tutorials sent straight to your inbox each month. Never miss the chance to up your React and JavaScript game!
          </h2>
        </div>
        <div class="col-12 text-center mt-0 mt-md-5">
          <p class="d-block d-md-none">Get our monthly newsletter, packed full of the latest React tutorials, delivered straight to your inbox.</p>
          <p class="d-none d-md-block text-muted">We'll never send you spam, just great tutorials. Pop your email in the box below to sign up.</p>
          <form action="https://wplogic.us18.list-manage.com/subscribe/post?u=7806e537fd7c0d111ed32b4a6&amp;id=c4ae659733" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" validate>
            <div class="input-group mb-3">
              <input type="email" class="form-control" name="EMAIL" id="mce-EMAIL" placeholder="Your Email Address" required>
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Sign Up 👍</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <div class="album mt-2 pb-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="pb-0 text-center text-md-left text-muted">Get Great Tutorials Like These, Each Month...</h3>
        </div>
      </div>
      <div class="row mt-4">
        <?php include('blog-list.php') ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
