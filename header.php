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
    <header>
      <?php
        if (strpos($_SERVER['REQUEST_URI'], "react-book") === false){
         include('Components/banner.php');
        }
      ?>
        <nav class="nav">
            <div class="navbar-brand">
                <a href="https://upmostly.com" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'logo' });">
                    <img src="https://upmostly.com/wp-content/uploads/upmostly-logo.png" alt="Upmostly Logo" />
                    <strong>Upmostly</strong>
                </a>
            </div>
            <div class="links">
                <a href="https://upmostly.com/tutorials" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'tutorials' });">
                    <i class="fab fa-react mr-1 tutorials"></i>
                    Tutorials
                </a>
                <a href="https://upmostly.com/newsletter" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'newsletter' });">
                    <i class="fas fa-envelope mr-1 newsletter" /></i>
                    Newsletter
                </a>
                <a href="https://upmostly.com/about" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'about' });">
                    <i class="fas fa-comment mr-1 about"></i>
                    About
                </a>
            </div>
            <div class="extra">
                <a href="https://twitter.com/upmostlyhq" target="_blank" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'twitter' });">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="https://github.com/upmostly" target="_blank" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'github' });">
                    <i class="fab fa-github"></i>
                </a>
            </div>
        </nav>
    </header>
