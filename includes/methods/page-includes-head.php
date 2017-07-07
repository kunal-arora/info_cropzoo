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

		endif;
	
	endforeach;

?>

