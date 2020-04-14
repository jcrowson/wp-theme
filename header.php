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
    <script type="text/javascript" src="//downloads.mailchimp.com/js/signup-forms/popup/unique-methods/embed.js" data-dojo-config="usePlainJson: true, isDebug: false"></script><script type="text/javascript">window.dojoRequire(["mojo/signup-forms/Loader"], function(L) { L.start({"baseUrl":"mc.us18.list-manage.com","uuid":"7806e537fd7c0d111ed32b4a6","lid":"c4ae659733","uniqueMethods":true}) })</script>
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
                    <img src="https://upmostly.com/wp-content/uploads/upmostly-logo-v2.png" alt="Upmostly Logo" />
                    <strong>Upmostly</strong>
                </a>
            </div>
            <div class="links">
                <a href="https://upmostly.com/tutorials" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'tutorials' });">
                    <i class="icon-react mr-2 tutorials"></i>
                    Tutorials
                </a>
                <a href="https://upmostly.com/newsletter" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'newsletter' });">
                    <i class="icon-envelope mr-2 newsletter"></i>
                    Newsletter
                </a>
                <a href="https://upmostly.com/react-starter-kits" target="_blank" onClick="gtag('event', 'click', {
                    'event_category':
                'navigation', 'event_label': 'react-starter-kits' });">
                    <i class="icon-code mr-2 about"></i>
                    Starter Kits
                </a>
            </div>
            <div class="extra">
                <a href="https://twitter.com/upmostlyhq" target="_blank" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'twitter' });">
                    <i class="icon-twitter"></i>
                </a>
                <a href="https://github.com/upmostly" target="_blank" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'github' });">
                    <i class="icon-github"></i>
                </a>
            </div>
        </nav>
    </header>
