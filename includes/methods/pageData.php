<?php

$_pageData = json_encode(array(

 	// "home" => array(
  //       "title" => "Cropzoo - Fruits and vegetables suppliers",
  //       "description" => "If you have come to buy/procure fruits and vegetables for your restaurant, hotel, banquet, base kitchen or oven retail, you have come to the right place! ",
  //       "head_includes" => "",
  //       "footer_includes" => "homepage-includes-footer"
 	// ),
        "/about" => array(
        "title" => "Cropzoo | About Our Company",
        "description" => "We started small but now we serve all. We supply fruits and vegetables to all types of businesses. Here's more about us.",
        "head_includes" => "",
        "footer_includes" => ""
        ),
        "/ecommerce" => array(
        "title" => "Cropzoo | Our Services includes E-commerce Platform for Business",
        "description" => "CropZoo is a food solutions & sustainable agriculture company. We have made a commitment to produce more, produce good, conserve more and improve farmers lives.",
        "head_includes" => "",
        "footer_includes" => ""
        ),
        "/retail" => array(
        "title" => "Cropzoo | Exclusive Retails For Serving You Fresh Fruits and Vegetables",
        "description" => "Our motto is to deliver fresh quality produce at the competitive prices using the value chain model and our customers can enjoy the convenience of picking and choosing various varieties of fruits & vegetables From Stores.",
        "head_includes" => "",
        "footer_includes" => ""
        ),
        "/contact" => array(
        "title" => "Cropzoo | Contact Us For Any Queries",
        "description" => "CropZoo is a food solutions & sustainable agriculture company. We have made a commitment to produce more, produce good, conserve more and improve farmers lives.",
        "head_includes" => "",
        "footer_includes" => ""
        )
));

$page = json_decode($_pageData);

$version = "1.0.6";

?>