<?php get_header(); ?>

<main role="main">
  <section class="jumbotron d-flex justify-content-between align-items-center hero-banner hero-banner-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="hero-text">Level Up Your React Skills</h1>
          <h2 class="pt-0 pb-0 mb-0 hero-subtitle-text">
            Fun, easy to follow <i class="fab fa-react react-icon"></i> React and <i class="fab fa-js-square javascript-icon" /></i> JavaScript tutorials.
          </h2>
        </div>
      </div>
    </div>
  </section>
  <div class="album mt-2 pb-5 bg-light">
    <div class="container">
      <div class="row pt-5">
        <?php include('Components/featured-posts.php') ?>
      </div>
      <div class="row">
        <div class="col">
          <h3 class="p-0 m-0 text-center text-md-left text-muted"><i class="fab fa-react react-icon"></i> Latest React Tutorials</h3>
        </div>
      </div>
      <div class="row mt-4">
        <?php include('Components/react-tutorials.php') ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
