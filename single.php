<?php
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
?>

<?php (strpos($url,'job') === false) ? include('Pages/tutorial.php') : include('Pages/job.php') ?>

<?php get_footer(); ?>
