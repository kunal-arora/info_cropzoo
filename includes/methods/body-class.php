<?php	
	foreach ($page as $key => $value) :		
		if (strpos($base_url, $key) !== false) : 
    
			// 
			if ( ($value->body_class !== "" ) ) :

				echo $value->body_class;

			endif;
			//

			break;

		endif;
	
	endforeach;

?>