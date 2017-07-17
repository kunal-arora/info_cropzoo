<?php

$_pageData = json_encode(array(

 	"home" => array(
        "title" => "Cropzoo - Farms to Fridges",
        "description" => "xxxxxx",
        "head_includes" => "",
        "body_class" => "crop-index",
        "footer_includes" => "homepage-includes-footer"
 	),
        "about" => array(
        "title" => "Cropzoo - Farms to Fridges",
        "description" => "xxxxxx",
        "head_includes" => "",
        "body_class" => "crop-about",
        "footer_includes" => ""
        ),
 	"zoo" => array(
        "title" => "Cropzoo - Farms to Fridges",
        "description" => "zoo",
        "head_includes" => "",
        "body_class" => "zoo-index",
        "footer_includes" => "homepage-includes-footer"
 	),
        "ecommerce" => array(
        "title" => "Cropzoo - Farms to Fridges",
        "description" => "zoo",
        "head_includes" => "",
        "body_class" => "zoo-ecommerce",
        "footer_includes" => ""
        ),
        "retail" => array(
        "title" => "Cropzoo - Farms to Fridges",
        "description" => "zoo",
        "head_includes" => "",
        "body_class" => "zoo-retail",
        "footer_includes" => ""
        )
));

$page = json_decode($_pageData);

?>