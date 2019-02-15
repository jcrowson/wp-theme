<?php get_header(); ?>

<main role="main">
  <section class="jumbotron d-flex justify-content-between align-items-center hero-banner hero-banner-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Become a React and JavaScript Expert</h1>
          <h2 class="pt-0 pb-0 mb-0">
            Learn React <i class="fab fa-react react-icon"></i> and JavaScript <i class="fab fa-js-square javascript-icon" /></i> the right way with fun, easy to follow tutorials.
          </h2>
        </div>
      </div>
    </div>
  </section>
  <div class="album mt-2 pb-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="pb-0 text-center text-md-left text-muted">Latest Tutorials</h3>
        </div>
      </div>
      <div class="row mt-4">
        <?php include('blog-list.php') ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
