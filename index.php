<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    
    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
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
    <?php  include 'includes/methods/pageData.php'; ?>
    <!-- Latest compiled and minified CSS bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS bootstrap -->

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <!-- google fonts -->

    <!-- google icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- google icons -->

    <!-- custom styles -->
    <link rel="stylesheet" href="css/dist/styles.min.css?v=<?php echo $version; ?>">
    <!-- custom styles -->

  </head>
  <body class="cz-body">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- main container fluid -->
    <div class="container-fluid no-padding">
    
<style type="text/css">
    html, body {
        overflow-y: hidden;
    }
</style>


<div class="home-container">
    <img src="images/cropzoo-flat-logo.svg" class="flat-logo-home">
    <div class="mdl-cell mdl-cell--6-col left-side">

        <p class="text-center mb-30">
        We at CropZoo are committed at providing service to the farmers of the India which has never been provided before in a manner where they get the best price for their produce and in that process we motivate every  farmer to grow more and earn more . 
        </p>

        <!-- Accent-colored raised button with ripple -->
        <a href="crop/home.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent explore-btn">
        EXPLORE
        </a>

    </div>
    <div class="mdl-cell mdl-cell--6-col right-side">

        <p class="text-center mb-30">
        We at CropZoo are committed at providing service to the farmers of the India which has never been provided before in a manner where they get the best price for their produce and in that process we motivate every  farmer to grow more and earn more . 
        </p>

        <!-- Accent-colored raised button with ripple -->
        <a href="zoo/home.php" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent explore-btn">
        EXPLORE
        </a>

    </div>
</div>

<!-- jquery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<!-- jquery -->

<script type="text/javascript" src="js/vendor/skrollr.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->

<!-- scripts and other url based includes -->
<?php
  include 'methods/page-includes-footer.php';
?>
<!-- scripts and other url based includes -->

<script type="text/javascript">
$(function(){
    skrollr.init({
        forceHeight: false,
        render: function(data) {
            //Log the current scroll position.
            console.log(data.curTop);
        }
    });
});
</script>

</div>
<!-- /main container fluid -->
</body>

</html>
