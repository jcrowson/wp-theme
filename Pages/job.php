<?php include(__DIR__ . '/../Components/jobs-header.php'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<main role="main">
  <section style="padding: 3rem 0 .2rem 0;" class="jobs-hero text-center">
    <div class="container container-small">
      <h2 class="job-heading">
        Find your next React position at some of the best companies on the planet. There's no sign-up
        process, just apply directly.
      </h2>
    </div>
  </section>
  <article>
    <section class="my-3 mx-2 my-md-5">
      <div class="content">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-12 col-xl-10">
              <?php the_content(); ?>
              <?php endwhile; else : ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </article>
</main>