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
