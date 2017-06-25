<?php
	require 'functions.php';

	include 'pageData.php';

	$page = json_decode($_pageData);

	foreach ($page as $key => $value) :
		
		if (strpos($base_url, $key) !== false) : 

?>
			<meta name="description" content="<?php echo $value->description; ?>">
		    <title><?php echo $value->title; ?></title>
<?php	    
			include 'page-includes/'.$value->head_includes.'.php';	

		endif;
	
	endforeach;

?>

