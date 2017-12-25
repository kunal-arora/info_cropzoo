<?php
function headerfunc($pageName,$banner1,$banner2,$banner3,$pageHeading,$bannerText) { 
    $data = array(
      'pageName' => $pageName,
      'banner1' => $banner1,
      'banner2' => $banner2,
      'banner3' => $banner3,
      'heading' => $pageHeading,
      'bannerText' => $bannerText
    );

    return $data;
}

?>
   
