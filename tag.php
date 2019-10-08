<?php get_header(); ?>

<main role="main" class="pt-5">
  <div class="album mt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="pb-0 mb-0 text-center text-md-left text-muted"><i class="fab fa-react react-icon"></i>
            All
            <?php
              echo single_tag_title( '', false );
            ?>
            Tutorials
          </h3>
        </div>
      </div>
      <div class="row mt-4">
        <?php include('Components/tags-all-posts.php') ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
