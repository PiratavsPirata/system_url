<?php 


error_reporting(0);
ini_set('display_errors', 0 );

#Codigo API
$apipeshort=    "8b9c47791b1ccb88c3c3ff4a12d95a796648a03e";
$apilinkrex=    "";
$apishort2win=  "5563bea320261fab122312f9acecc1f132c5172b";
$apiclicksfly=  "7fda0d03cd3ee006f45aa945a74d20565da6f891";
$apiwicr=       "05f40a8ffe384ece74f8625fbaef59e2f39bd317";
$apivivasd=     "";
$apikokemoon=   "";
$apiourl=       "";
$apitmearn=     "";
$apicutwin=     "";
$apiurly=       "";
$apiourl=       "";
$apiadbilty=    "";
$apiouo=        "3EKnIRsh";
$apiadflyk=     "7c98160b4d9b2f13799d8887355bc7b925aebd61";
$apishrtfly=    "653d02bf0cba2d596faa4a103c6923ccbf3f1502";
$apizagl=       "109bae15f9c13b0e874ca9775e5e8a5594d86233";
$apigeturls=    "1bf39312dab4afa62ca52972c8df90d44f78afda";

/* APIs Ativas

peshort     - 
linkrex     - 
clicksfly   - 
wicr        - 
shrinkearn  - +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
vivasd      - http://vivads.net/ref/marconwillian
kokemoon    - https://www.kokemoon.com/ref/marconwillian
ourl        - https://ourl.io/ref/marconwillian
tmearn      - https://tmearn.com/ref/marconwillian
cutwin      - https://cutwin.com/ref/marconwillian
urly        - http://ur.ly/register/opgAqN
adbilty     - https://adbilty.me/ref/marconwillian
short2win   - 
adflyk      - https://adflyk.com/ref/marconwillian
shrtfly     - https://shrtfly.com/ref/marconwillian
ouo         - 
zagl        - https://za.gl/ref/marconwillian
geturls     -

*/


#Nome da API 1 com apenas 1 click
$api1nome="clicksfly"; 


#Nome da API 2
$api2nome="clicksfly";
$api2max="3"; #Maximo de cliques
$api2valido="1"; # 1=Ativo e 0=inativo


#Nome da API 3
$api3nome="ouo";
$api3max="1"; #Maximo de cliques
$api3valido="0"; # 1=Ativo e 0=inativo


#Nome da API 4
$api4nome="wicr";
$api4max="3"; #Maximo de cliques
$api4valido="0"; # 1=Ativo e 0=inativo


#Nome da API 5
$api5nome="shrtfly";
$api5max="1"; #Maximo de cliques
$api5valido="0"; # 1=Ativo e 0=inativo


#Nome da API 6
$api6nome="wicr";
$api6max="1"; #Maximo de cliques
$api6valido="0"; # 1=Ativo e 0=inativo


#Nome da API 7
$api7nome="wicr";
$api7max="1"; #Maximo de cliques
$api7valido="0"; # 1=Ativo e 0=inativo


#Nome da API 8
$api8nome="wicr";
$api8max="1"; #Maximo de cliques
$api8valido="0"; # 1=Ativo e 0=inativo


#Nome da API 9
$api9nome="wicr";
$api9max="1"; #Maximo de cliques
$api9valido="0"; # 1=Ativo e 0=inativo


#Codigo API Final
$apifinalnome="ouo";
#Maximo infinito
	
	

 
   
/* Conecta com banco principal */
#include "../conf/bancoprincipal.php";

/* Pega dados da URL */
	$codigo=$_GET['codigo'];
#	$usuario=$_GET['usuario'];
#
#
/* Pega dados do banco principal é*/
#	$sqlt = mysql_query("SELECT * FROM link_".$usuario." where cod='".$codigo."'");
#
#
#	$dadost=mysql_fetch_array($sqlt);
#
#	$tipo= $dadost['tipo'];
#	$original= $dadost['original'];
#	$gerador= $dadost['encrip'];
#	if($tipo=='d') { 
#
#	
#	$pula=$_COOKIE["".$usuario."_logado"];
#
#	
 #   $antigo= $dadost['antigo'];
 #  
#	if($usuario==$pula){
#	$link= $dadost['original'];
#    header("Location: ".$link."");
#    exit;
#}
#
 #   
#
#$link= $dadost['encurtado'];
#$linkteste=substr($link, 0, 5);
#	    if($linkteste=="https"){ $linkfinalo=substr($link, 8);} else { $ssl="0";
#	    if($linkteste=="http:"){
#	    $linkfinalo=substr($link, 7);} else {$linkfinalo=$link;}}

$linkfinalo=$linkfinalo."-".uniqid();

                    $encrip=$codigo;
                    include "/home/animeszx/sistema/cod/c.php";
                    $codigo=$encrip;



$linkfinalo="http://x.reli.ga/url/redirecionador/".$codigo."-818175-".uniqid();
$date = date('Ymd');

$ano = date('Y');
$mes = date('m');
$dia = date('d');
$dia--;
$dia=str_pad($dia, 2, "0", STR_PAD_LEFT);
$dataantes=$ano.$mes.$dia;
setcookie($dataantes,"");

$api=$_COOKIE[$date];
$visita=$_COOKIE["visita"];



if($api==""){

if($api2valido=="1"){
setcookie($date,"2");
} else {
setcookie($date,"final");
}

setcookie("visita","1");

}
#Primeira API

if($api==""){

include 'api/'.$api1nome.'.php';
$visita="1";      

}



#Segunda API
if($api=="2"){
if($visita==$api2max){

if($api3valido=="1"){
setcookie($date,"3");
} else {
setcookie($date,"final");
}
setcookie("visita","1"); 

} else {
$visita++;
setcookie("visita",$visita);
}

include 'api/'.$api2nome.'.php';

}



#Terceira API
if($api=="3"){
if($visita==$api3max){

if($api4valido=="1"){
setcookie($date,"4");
} else {
setcookie($date,"final");
}
setcookie("visita","1");    

} else {
$visita++;
setcookie("visita",$visita);
}

include 'api/'.$api3nome.'.php';

}



#Quarta API
if($api=="4"){
if($visita==$api4max){

if($api5valido=="1"){
setcookie($date,"5");
} else {
setcookie($date,"final");
}
setcookie("visita","1");    
} else {
$visita++;
setcookie("visita",$visita);
}

include 'api/'.$api4nome.'.php';

}



#Quinta API
if($api=="5"){
if($visita==$api5max){

if($api6valido=="1"){
setcookie($date,"6");
} else {
setcookie($date,"final");
}
setcookie("visita","1");    
} else {
$visita++;
setcookie("visita",$visita);
}

include 'api/'.$api5nome.'.php';

}



#Sexta API
if($api=="6"){
if($visita==$api6max){

if($api7valido=="1"){
setcookie($date,"7");
} else {
setcookie($date,"final");
}
setcookie("visita","1");    
} else {
$visita++;
setcookie("visita",$visita);
}

include 'api/'.$api6nome.'.php';

}



#Setima API
if($api=="7"){
if($visita==$api7max){

if($api8valido=="1"){
setcookie($date,"8");
} else {
setcookie($date,"final");
}
setcookie("visita","1");    
} else {
$visita++;
setcookie("visita",$visita);
}

include 'api/'.$api7nome.'.php'; 

}



#Oitava API
if($api=="8"){
if($visita==$api8max){

if($api9valido=="1"){
setcookie($date,"9");
} else {
setcookie($date,"final");
}
setcookie("visita","1");    
} else {
$visita++;
setcookie("visita",$visita);
}

include 'api/'.$api8nome.'.php';

}



#Nona API
if($api=="9"){
if($visita==$api9max){

setcookie($date,"final");
setcookie("visita","1");    

} else {
$visita++;
setcookie("visita",$visita);
}

include 'api/'.$api9nome.'.php';

}



#API final
if($api=="final"){

#---------------------------------------------------------------------------------------------------
#

include 'api/'.$apifinalnome.'.php';


}
	
	
    header("location: ".$link."");
     
       
    
  






?>

    <meta charset="utf-8"/><title>Baixar Séries MP4</title>