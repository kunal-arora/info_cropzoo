<?php
	
	foreach ($page as $key => $value) :
		
		if (strpos($base_url, $key) !== false) : 

?>
			
<?php	    
			include 'page-includes/'.$value->footer_includes.'.php';	

		endif;
	
	endforeach;

?>

