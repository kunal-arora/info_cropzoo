<?php
	
	foreach ($page as $key => $value) :
		
		if (strpos($base_url, $key) !== false) : 

?>
			
<?php	    
			// special js includes
			if ( ($value->footer_includes !== "" ) ) :

				include 'page-includes/'.$value->footer_includes.'.php';

			endif;
			// special js includes

			break;

		endif;
	
	endforeach;

?>

