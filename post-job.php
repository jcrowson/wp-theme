<?php /* Template Name: Post a Job */ ?>

<?php include('Components/jobs-header.php'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main role="main">
  <section style="padding: 6rem 0 3rem 0;" class="jobs-hero text-center">
    <div class="container container-small">
      <h1>Over 65,000 React and JavaScript Developers visit Upmostly every month</h1>
      <h5>Post a new job listing on Upmostly today and reach a vast audience of JavaScript and React developers.</h5>
    </div>
  </section>

  <div class="py-4 mb-5">
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
  </div>
</main>

<?php get_footer(); ?>
