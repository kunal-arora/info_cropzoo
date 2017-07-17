

<!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->

<div class="crop--header">

  <div class="container">
    <div id="js-logo-header" class="row main-logo-head">
      <div class="col-sm-12 col-xs-12">
        <a href="../index.php">
          <img src="../images/logo-flat-black.svg" class="crop-logo">
        </a>
      </div>
    </div>
  </div>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- <a class="navbar-brand" href="#">Brand</a> -->
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul id="js-nav" class="nav navbar-nav navbar-center">
          <li class="<?php if ($base_url == "/home.php") {echo "active"; } ?>"><a href="home.php">HOME <span class="sr-only">(current)</span></a></li>
          <li class="<?php if ($base_url == "/about.php") {echo "active"; } ?>"><a href="about.php">ABOUT</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li class="<?php if ($base_url == "/ecommerce.php") {echo "active"; } ?>"><a href="ecommerce.php">Our e-commerce platform</a></li>
              <li role="separator" class="divider"></li>
              <li class="<?php if ($base_url == "/retail.php") {echo "active"; } ?>"><a href="retail.php">Our retail stores</a></li>
            </ul>
          </li>
          <li class="<?php if ($base_url == "/contact.php") {echo "active"; } ?>"><a href="contact.php">CONTACT US</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>

