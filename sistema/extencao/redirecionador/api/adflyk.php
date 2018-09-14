<?php

$linko=$linkfinalo;
$c = curl_init();
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_URL, 'https://adflyk.com/api/?api='.$apiadflyk.'&format=text&url='.$linko.'-adflyk');
$arquivo = curl_exec($c);
curl_close($c);
$link=trim($arquivo);

if($link==""){echo "error, Recarregando..."; header("Refresh: 0"); } 

?>