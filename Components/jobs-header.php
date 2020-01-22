<?php
  $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  $is_button_shown = strpos($url,'jobs') == true;
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title><?php wp_title( '-', true, 'right' ); ?></title>
  <?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-128624579-1"></script>
  <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'UA-128624579-1');
  </script>
</head>
<body>
<header class="jobs-header">
  <nav class="nav">
    <div class="navbar-brand">
      <a href="https://upmostly.com/jobs" onClick="gtag('event', 'click', { 'event_category': 'navigation',
      'event_label': 'logo' });">
        <img src="https://upmostly.com/wp-content/uploads/upmostly-logo.png" alt="Upmostly Logo" />
        <strong>Upmostly Jobs</strong>
      </a>
    </div>
    <?php if($is_button_shown) : ?>
      <a href="jobs/post-a-job" role="button" class="btn btn-success btn-post-a-job">Post a Job</a>
    <?php endif; ?>
  </nav>
</header>
