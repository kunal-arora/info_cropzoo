<!-- Footer -->
    <footer class="text-center footer-container">
        <div class="footer-above">
            <div class="container">
                <!-- <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Location</h3>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>About Freelancer</h3>
                        <p><a href="http://startbootstrap.com"></a>.</p>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; <?php echo date("Y"); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>


<!-- jquery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<!-- jquery -->
<?php
        if ( $detect->isMobile() ):
?>
 
<?php
        else:
?>
<script type="text/javascript" src="../js/vendor/skrollr.min.js"></script>

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
  include 'methods/page-includes-footer.php';
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
