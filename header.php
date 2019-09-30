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
    </script>
    <!-- Anti-flicker snippet (recommended)  -->
    <style>.async-hide { opacity: 0 !important} </style>
    <script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
    h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
    (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
    })(window,document.documentElement,'async-hide','dataLayer',4000,
    {'OPT_CONTAINER_ID':true});</script>
    <script>
      gtag('js', new Date());
      gtag('config', 'UA-128624579-1', { 'optimize_id': 'GTM-KHZ28RC' });
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
                    <i class="icon-react mr-1 tutorials"></i>
                    Tutorials
                </a>
                <a href="https://upmostly.com/newsletter" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'newsletter' });">
                    <i class="icon-envelope mr-1 newsletter" /></i>
                    Newsletter
                </a>
                <a href="https://upmostly.com/about" onClick="gtag('event', 'click', { 'event_category': 'navigation', 'event_label': 'about' });">
                    <i class="icon-comment mr-1 about"></i>
                    About
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
