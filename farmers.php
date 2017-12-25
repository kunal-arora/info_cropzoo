<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Cropzoo | Farms to Fridges</title>
    <meta name="description" content="We started small but now we serve all. We supply fruits and vegetables to all types of businesses. Here's more about us.">

    <?php include "includes/head.php"; ?>

  </head>

  <body id="page-top">


    <?php  
    	include "includes/headerData.php";
    	$data = headerfunc("farmerspage","img/farmers/banners/banner1.jpg","img/farmers/banners/banner2.jpg","","farmers","Providing support to </br> the leaders in the field."); 
    	include "includes/headerHtml.php"; 
    ?>

    <!--  -->
    <div class="farmerspage-wrapper">
    	<section class="content-section about-section sections">
    		<div class="container">
				<div class="row">
	    			<div class="col-md-5 text-center img-fluid mar50">
	    				<img src="img/farmers/farm.svg">
	    			</div>
					<div class="col-md-6 col-xs-12 ">
						<h1 class="small-heading">FARMERS</h1>
		            	<h2 class="large-heading">Why us ?</h2>
						<p class="mar10">
							We provide logistic support and tech-advancements in the field of agriculture. we connect the farmer to the market and provide them with the best rates.
						</p>						
					</div>					
				</div>
    		</div>
    	</section>

    	<section class="content-section other-section sections">
			<div class="container">
				<div class="row greybg mar90">
					<div class="col-md-4 text-center ic2">
						<div class="col-md-12 img-fluid"><img src="img/farmers/better-rates.svg"></div>
						<div class="col-md-12"><h5>BETTER RATES</h5></div>
					</div>
				
					<div class="col-md-4 text-center ic2">
						<div class="col-md-12 img-fluid"><img src="img/farmers/logistics.svg"></div>
						<div class="col-md-12"><h5>LOGISTICS SUPPORT</h5></div>
					</div>
				
					<div class="col-md-4 text-center ic2">
						<div class="col-md-12 img-fluid"><img src="img/farmers/export.svg"></div>
						<div class="col-md-12"><h5>KNOWLEDGE & INPUT LINKAGE</h5></div>
					</div>	
				</div>		
			</div>
    	</section>
    </div>
    <?php include 'includes/footer.php'; ?>

  </body>

</html>
