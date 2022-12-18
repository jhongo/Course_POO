<?php

$url="https://api.dailymotion.com/videos?channel=sport&limit=10";

$opc = array("ssl"=>array("verify_peer"=>false, "verify_peer_name"=>false));

$res = file_get_contents($url,false,stream_context_create($opc));

$objRes = json_decode($res);

foreach ($objRes->list as $video) {

    // print_r($video->title);

}
?>

<ul>
    
    <?php foreach($objRes->list as $video) {  ?>
    
        <li> <?php
         
         echo ($video->title)
         
         
         ?>  </li>
    <?php } ?>

</ul>