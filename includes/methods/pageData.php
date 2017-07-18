<?php

$_pageData = json_encode(array(

 	"home" => array(
        "title" => "Cropzoo - Farms to Fridges",
        "description" => "xxxxxx",
        "head_includes" => "",
        "footer_includes" => "homepage-includes-footer"
 	),
        "about" => array(
        "title" => "Cropzoo - Farms to Fridges",
        "description" => "xxxxxx",
        "head_includes" => "",
        "footer_includes" => ""
        ),
 	"zoo" => array(
        "title" => "Cropzoo - Farms to Fridges",
        "description" => "zoo",
        "head_includes" => "",
        "footer_includes" => "homepage-includes-footer"
 	),
        "ecommerce" => array(
        "title" => "Cropzoo - Farms to Fridges",
        "description" => "zoo",
        "head_includes" => "",
        "footer_includes" => ""
        ),
        "retail" => array(
        "title" => "Cropzoo - Farms to Fridges",
        "description" => "zoo",
        "head_includes" => "",
        "footer_includes" => ""
        )
));

$page = json_decode($_pageData);

$version = "1.0.1";

?>