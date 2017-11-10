<?php
	require 'functions.php';

	include 'pageData.php';

	$page = json_decode($_pageData);

	foreach ($page as $key => $value) :

		if (strpos($base_url, $key) !== false) : 

?>			
			<!-- meta tags for headers -->
			<meta name="description" content="<?php echo $value->description; ?>">
		    <title><?php echo $value->title; ?></title>
			<!-- meta tags for headers -->
<?php	    
			// special js includes 
			// if ( $value->head_includes !== "" ) :

			// 	include 'page-includes/'.$value->head_includes.'.php';

			// endif;	
			// special js includes 

			break;

		else:

			
?>
			<meta name="description" content="If you have come to buy/procure fruits and vegetables for your restaurant, hotel, banquet, base kitchen or oven retail, you have come to the right place!">
		    <title>Cropzoo - Fruits and vegetables suppliers</title>


<?php
		    break;

		endif;
	
	endforeach;

?>

