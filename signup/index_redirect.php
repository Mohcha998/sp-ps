<?php

$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");

if(isset($_GET['ref'])){
    $params = '?ref='.$_GET['ref'];
}else{
    $params ='';
}

if ($android == true)
{
header("location: https://merryrianalearningcentre.com/".$params);
//header("location: market://details?id=com.google.earth");
}
else if ($iphone || $ipod == true)
{
header("location: https://merryrianalearningcentre.com/".$params);
}
else
{
header("location: https://merryrianalearningcentre.com/".$params);
}
?>