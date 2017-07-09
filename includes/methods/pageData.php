<?php

$_pageData = json_encode(array(

 	"crop" => array(
        "title" => "Cropzoo - Farms to Fridges",
        "description" => "xxxxxx",
        "head_includes" => "",
        "body_class" => "crop-index",
        "footer_includes" => "homepage-includes-footer"
 	),
 	"zoo" => array(
        "title" => "Cropzoo - Farms to Fridges",
        "description" => "zoo",
        "head_includes" => "",
        "body_class" => "zoo-index",
        "footer_includes" => "homepage-includes-footer"
 	)
));

$page = json_decode($_pageData);

?>