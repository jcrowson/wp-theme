<?php get_header(); ?>

<main role="main" class="pt-4">
  <section class="jumbotron d-flex justify-content-between align-items-center hero-banner hero-banner-blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="hero-text">Level Up Your React Skills</h1>
          <h2 class="pt-0 pb-0 mb-0 no-underline">
            Upmostly brings you original React and JavaScript tutorials each week.
          </h2>
        </div>
      </div>
    </div>
  </section>
  <div class="album mt-2 pb-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col mt-3">
          <h3 class="p-0 m-0 text-center text-md-left text-muted"><i class="icon-react react-icon"></i> Latest React Tutorials</h3>
        </div>
      </div>
      <div class="row mt-4">
        <?php include('Components/all-react-tutorials.php') ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
