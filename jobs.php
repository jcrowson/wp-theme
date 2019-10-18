<?php /* Template Name: Jobs */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<main role="main" class="pt-5">
  <section style="margin-top: 5rem;" class="text-center">
    <div class="container container-small">
      <h1>Jobs for React & JavaScript Developers</h1>
      <h5>The world’s best tech companies hire on Upmostly.</h5>
    </div>
  </section>

  <div class="pb-5 pt-3">
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
