<?php

	foreach ($page as $key => $value) :
		
		if (strpos($base_url, $key) !== false) : 
   
			// special js includes 
			if ( $value->head_includes !== "" ) :

				include 'page-includes/'.$value->head_includes.'.php';

			endif;	
			// special js includes 

			break;

		endif;
	
	endforeach;

?>

