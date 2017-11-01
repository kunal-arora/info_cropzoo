<!-- Footer -->
<div class="footer-wrapper">
    <footer>
        <nav class="footer-nav clearfix">
            <ul class="nav-list list-1">
                <li class="nav-item"><a href="/" title="Home">Home</a></li>
                <li class="nav-item"><a href="/ecommerce.php" title="e-commerce">e-commerce</a></li>
                <li class="nav-item"><a href="/retail.php" title="Retail stores">retail stores</a></li>
                <li class="nav-item"><a href="/products.php" title="Products">Products</a></li>
                <!-- <li class="nav-item"><a href="/team.php" title="Team FNV">Team FNV</a></li> -->
            </ul>
            <ul class="nav-list list-2">
                <li class="nav-item"><a href="/about.php" title="About Us">About Us</a></li>
                <li class="nav-item"><a href="/contact.php" title="Contact Us">Contact Us</a></li>
                <!-- <li class="nav-item"><a href="http://shop.fnv.com" title="Shop">Shop</a></li> -->
                <!-- <li class="nav-item"><a href="http://blog.fnv.com" title="Blog">Blog</a></li> -->
            </ul>
        </nav><!-- .footer-nav -->

        <div class="follow">
            <div class="title">Follow</div>
            <ul class="social-list clearfix">
                <li class="social-item"><a href="https://twitter.com/cropzoo" class="fa fa-twitter" target="_blank"></a></li>
                <li class="social-item"><a href="https://www.facebook.com/cropzoo" class="fa fa-facebook" target="_blank"></a></li>
                <li class="social-item"><a href="https://instagram.com/cropzoo" class="fa fa-instagram" target="_blank"></a></li>
                <!-- <li class="social-item"><a href="http://blog.fnv.com" class="icon-tumblr" target="_blank"></a></li> -->
                <!-- <li class="social-item"><a href="https://www.youtube.com/channel/UCb3XDd5F4Rc_mAFP3x13peA" class="icon-youtube" target="_blank"></a></li> -->
            </ul>
        </div><!-- .follow -->

        <div class="logo icon icon-logo"></div>
        <div class="terms clearfix">
            <a class="terms-contact" href="mailto:support@cropzoo.com">Mail Us</a>
            <a class="terms-legal" href="#" target="_blank">Privacy Policy</a>
        </div>
        <div class="copyright">© 2017 CROPZOO BY FRUTTA-E-VERDURA</div>
    </footer><!-- footer -->
</div>


<!-- jquery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<!-- jquery -->
<?php
        if ( $detect->isMobile() ):
?>
 
<?php
        else:
?>
<script type="text/javascript" src="js/vendor/skrollr.min.js"></script>

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

<?php
        endif;
?>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->

<!-- scripts and other url based includes -->
<?php
  include 'methods/page-includes/homepage-includes-footer.php';
?>
<!-- scripts and other url based includes -->


<script type="text/javascript">

$('#toggle').click(function() {
    $(this).toggleClass('active');
    $('#overlay').toggleClass('open');
});

</script>

</div>
<!-- /main container fluid -->
</body>

</html>
