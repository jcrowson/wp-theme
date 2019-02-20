<?php get_header(); ?>

<main role="main">
  <div class="album mt-5 pb-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="pb-0 mb-0 text-center text-md-left text-muted"><i class="fab fa-react react-icon"></i> All React Tutorials</h3>
        </div>
      </div>
      <div class="row mt-4">
        <?php include('react-tutorials.php') ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
