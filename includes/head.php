<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106389962-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-106389962-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W3L3SDR');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="theme-color" content="#00C063">
    
    <!-- social media meta  -->
    <meta name="p:domain_verify" content="a0096b3611ca41b19d81f173553eaf85"/>
    <!-- social media meta  -->

    <!-- scripts and other url based includes -->
    <?php
        require 'Mobile_Detect.php';
        $detect = new Mobile_Detect;
        include 'methods/page-includes-head.php';
    ?>
    <!-- scripts and other url based includes -->

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="Cropzoo">
    <meta name="apple-mobile-web-app-title" content="Cropzoo">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <!-- Latest compiled and minified CSS bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS bootstrap -->

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
    <!-- google fonts -->

    <!-- google icons -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"> -->
    <link rel="stylesheet" href="css/vendor/font-awesome.min.css">
    <!-- google icons -->

    <?php
      include 'methods/page-header-things.php';
    ?>

    <!-- custom styles -->
    <link rel="stylesheet" href="css/dist/styles.min.css?v=<?php echo $version; ?>">
    <!-- custom styles -->

  </head>
  <body id="skrollr-body" class="cz-body <?php //include 'methods/body-class.php'; ?>">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W3L3SDR"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php //include 'burger-menu.php'; ?>
    <!-- main container fluid -->
    <div id="js-main-container" class="main-container">

    <?php
        if ( $detect->isMobile() ):
    ?>

    
    <?php
        else:
    ?>

    <script type="text/javascript">
        function bodyHeight() {

            var height = document.getElementById('js-main-container').offsetHeight;

            var body = window.document.getElementsByTagName( 'body' )[0];
            
            body.setAttribute("style", "height:"+height+"px;");

        }

        window.onload = bodyHeight;
    </script>


    <?php
        endif;
    ?>

    