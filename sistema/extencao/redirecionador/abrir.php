<?php

error_reporting(0);
ini_set('display_errors', 0 );

$codigo=$_GET['codigo'];
$pastac=$_GET['pasta'];
$pasta="x";

                    $encrip=$codigo;
                    include "/home/animeszx/sistema/cod/d.php";
                    $codigo=$encrip;
                  
  $drive="0";
  if($pastac=="x"){
  $pasta="x";
  }
  if($pastac=="a"){
  $pasta="a.reli.ga";
  }  
  if($pastac=="b"){
  $pasta="b.reli.ga";
  }
  if($pastac=="link"){
  $pasta="link.animeszx.com.br";
  }
  if($pastac=="b2"){
  $pasta="b";
  }
include "/home/animeszx/sistema/links/".$pasta."/".$codigo.".php";    
  
if($drive=="1"){

		if($urldrive==""){
header("location: http://reviewsdecelular.ga/?ass=drive&usuario=".$usuario."&g=".$codigodrive);
exit;
} else { header("location: ".$urldrive.""); }
} else { 
header("location: ".$url."");
}