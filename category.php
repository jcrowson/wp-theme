<?php get_header();
  $title = single_cat_title( '', false );
?>

<main role="main" class="pt-5">
  <div class="album mt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <h3 class="pb-0 mb-0 text-center text-md-left text-muted"><i class="fab fa-react react-icon"></i>
            <?php echo ($title !== 'Tutorials') ? $title : ''; ?>
          </h3>
        </div>
      </div>
      <?php ($title == 'Tutorials') ? include('Components/tutorials/tutorials-page.php') : include('Components/category-all-posts.php')  ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>
