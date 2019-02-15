
<?php get_header(); ?>
<main role="main">
  <div class="album mt-2 pb-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="pb-0 text-center text-md-left text-muted">All Tutorials</h3>
        </div>
      </div>
      <div class="row mt-4">
        <?php include('blog-list.php') ?>
      </div>
    </div>
  </div>
</main>



<?php get_footer(); ?>
