<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$url='http://www.justknow.in/profile_logo_banner_images/296161607Logo.jpg';
$url='http://www.justknow.in/profile_logo_banner_images/60933739Logo.jpg';
$content=file_get_contents($url);
$fp=fopen("photo/test1.jpg", "a");
fwrite($fp,$content);
fclose($fp);

?>