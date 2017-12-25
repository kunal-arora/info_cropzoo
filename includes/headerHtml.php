<div id="bannerslider" class="carousel slide carousel--js" data-ride="carousel">
      <?php 
        if($data['banner2']):
      ?>
      <ol class="carousel-indicators">
        <li data-target="#bannerslider" data-slide-to="0" class="active"></li>
        <?php 
         if($data['banner2']):
        ?>
        <li data-target="#bannerslider" data-slide-to="1"></li>
        <?php
          endif;
          if($data['banner3']):
        ?>
        <li data-target="#bannerslider" data-slide-to="2"></li>
        <?php
          endif;
        ?>
      </ol>
      <?php
        endif;
      ?>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src='<?php echo $data['banner1']; ?>' alt="First slide">
        </div>
        <?php 
          if($data['banner2']):
        ?>
        <div class="carousel-item">
          <img class="d-block w-100" src='<?php echo $data['banner2']; ?>' alt="Second slide">
        </div>
        <?php
          endif;
          if($data['banner3']):
        ?>
        <div class="carousel-item">
          <img class="d-block w-100" src='<?php echo $data['banner3']; ?>' alt="Third slide">
        </div>
        <?php
          endif;
        ?>
      </div>
      <?php 
          if($data['banner2']):
      ?>
      <a class="carousel-control-prev" href="#bannerslider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#bannerslider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <?php
        endif;
      ?>
      <!-- overlay container -->
      <div class="slide-flex">
        <div class="container">
          <div class="top-bar only-desktop">
            <div class="col-xs-12 col-sm-4 logo-container">
              <a href="index.php"><img src="img/white-logo.svg" class="logo"></a>
            </div>
            <div class="col-xs-12 col-sm-8 contact-info">
              <a href="mailto:support@cropzoo.com">support@cropzoo.com</a>
              <a href="tel:+919811755299">&nbsp; &nbsp; | &nbsp; &nbsp;+91 9811755299</a>
            </div>
          </div>
          <div class="center-container text-cotnainer--js color-white">
            <?php if($data['heading']):  ?>
            <h1 class="page-heading"><?php echo $data['heading']; ?></h1>
            <?php endif;  ?>
            <h1 class="banner-text"><?php echo $data['bannerText']; ?></h1>
            <div class="btns-container only-desktop">
              <div class="row">
                <div class="col-xs-12 col-md-6">
                  <a href="brochure.pdf" download="brochure.pdf" class="btn btn-default btn-lg btn-margin">DOWNLOAD BROCHURE</a>
                </div>
                <div class="col-xs-12 col-md-6">
                  <a href="" class="btn btn-default btn-lg">KNOW MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- overlay container -->

</div>

    <?php if($data['pageName'] == 'homepage'): ?>
    <!-- Navigation -->
        <div class="shadow-nav"></div>
        <nav class="navbar navbar-expand-lg navbar-light navbar--js" id="mainNav">
          <div class="container position-relative">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              
              <i class="fa fa-bars"></i>
            </button>
            
            <a href="index.php" class="logo only-mobile"><img src="img/white-logo.svg"></a>
            <p class="number only-mobile"><a href="tel:+919811755299">+91 9811755299</a></p>

            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#bannerslider">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="farmers.php">Farmers</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

    <?php endif; ?>

    <?php if($data['pageName'] == 'aboutpage'): ?>
    <!-- Navigation -->
        <div class="shadow-nav"></div>
        <nav class="navbar navbar-expand-lg navbar-light navbar--js" id="mainNav">
          <div class="container position-relative">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              
              <i class="fa fa-bars"></i>
            </button>

            <a href="index.php" class="logo only-mobile"><img src="img/white-logo.svg"></a>
            <p class="number only-mobile"><a href="tel:+919811755299">+91 9811755299</a></p>

            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="index.php#bannerslider">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger active" href="about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="index.php#services">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="about.php#contact">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="farmers.php">Farmers</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        
    <?php endif; ?>

    <?php if($data['pageName'] == 'farmerspage'): ?>
    <!-- Navigation -->
        <div class="shadow-nav"></div>
        <nav class="navbar navbar-expand-lg navbar-light navbar--js" id="mainNav">
          <div class="container position-relative">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              
              <i class="fa fa-bars"></i>
            </button>
            
            <a href="index.php" class="logo only-mobile"><img src="img/white-logo.svg"></a>
            <p class="number only-mobile"><a href="tel:+919811755299">+91 9811755299</a></p>

            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav m-auto">
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="index.php#bannerslider">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="about.php">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="index.php#services">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="farmers.php#contact">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger active" href="farmers.php">Farmers</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        
    <?php endif; ?>
