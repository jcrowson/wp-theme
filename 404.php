<?php get_header(); ?>

<main role="main" class="pt-4">
  <section class="jumbotron d-flex justify-content-between align-items-center hero-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="hero-text">We can't find the page you're looking for...</h1>
          <img class="card-img-top" style="width: 350px" src="<?= get_bloginfo('wpurl') . '/wp-content/uploads/404.jpg'?>" alt="Person looking unhappy">
          <p>
            We're ever so sorry, but the page you're looking for has gone the way of the React Class Component. <strong>Extinct</strong>.
          </p>
        </div>
      </div>
    </div>
  </section>
  <div class="mt-4 pb-5">
    <div class="container">
      <div class="row my-4">
        <a class="col-12 col-md-6 col-lg-4 no-underline" href="tag/beginner-react-tutorials">
          <div class="card category-card hover-pop mb-4" style="background-image: url('<?= get_bloginfo('wpurl') . '/wp-content/uploads/beginner-react-tutorials.jpg' ?>')">
            Beginner React Tutorials
          </div>
        </a>
        <a class="col-12 col-md-6 col-lg-4 no-underline" href="tag/advanced-react-tutorials">
          <div class="card category-card hover-pop mb-4" style="background-image: url('<?= get_bloginfo('wpurl') . '/wp-content/uploads/advanced-react-tutorials.jpg' ?>')">
            Advanced React Tutorials
          </div>
        </a>
        <a class="col-12 col-md-6 col-lg-4 no-underline" href="tutorials">
          <div class="card category-card hover-pop mb-4" style="background-image: url('<?= get_bloginfo('wpurl') . '/wp-content/uploads/all-react-tutorials.jpg' ?>')">
            All React Tutorials
          </div>
        </a>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
