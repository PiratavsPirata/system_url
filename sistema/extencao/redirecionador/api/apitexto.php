<?php
include "../conf/bancoprincipal.php";


/* Pega dados */
$dominio='animeszx.com.br';
$dominioapi='url.animeszx.com.br';
$sslsite='http://';
$link=$_GET['link'];
$ssl=$_GET['ssl'];
If($ssl=='1') {
$original='https://'.$link; 
} else {
$original='http://'.$link;
}


$linke=$_GET['linke'];
$ssl=$_GET['ssl'];
If($ssl=='1') {
$encurtado='https://'.$linke; 
} else {
$encurtado='http://'.$linke;
}


$usuario=$_GET['usuario'];
$tipo=$_GET['tipo'];
If($tipo=="") {
$tipo='d'; }




/* Codigo */
$sqlc = mysql_query("SELECT * FROM conf_".$usuario." where linha='cod'");

$dadosc=mysql_fetch_array($sqlc);

$d = $dadosc['dadoi'];
$quantidade= $dadosc['dadoii'];
$quantidade++;
$codigolink= ++$d ;




$sql2 = mysql_query("SELECT * FROM link_".$usuario." where dominio='".$dominio."' and cod='".$codigolink."'");
 $dados2=mysql_fetch_array($sql2);
 $codigop = $dados2['cod'];
 
while ($codigolink == $codigop) {

$codigolink= ++$d ;

$sql2 = mysql_query("SELECT * FROM link_".$usuario." where dominio='".$dominio."' and cod='".$codigolink."'");
 $dados2=mysql_fetch_array($sql2);
 $codigop = $dados2['cod'];

}


/* Encripitografado*/
$gerae = null;
for($i=0; $i < 16; $i++) {
$gerae .= $cr{mt_rand(0, $max)};
}
$gerae = str_split($gerae, 4);
$encrip= $gerae[0];


/* Envia dados */
$sql1 = "INSERT INTO link_".$usuario." (encurtado, original, cod, encrip, dominio, usuario, tipo) VALUES ('".$encurtado."','".$original."','".$codigolink."','".$encrip."','".$dominio."',
'".$usuario."', '".$tipo."')";

$q1 = mysql_query($sql1);
if($q1);
		
		
		
$sqla = "UPDATE conf_".$usuario." SET dadoi='".$codigolink."', dadoii='".$quantidade."' WHERE linha='cod'";
		
$qa = mysql_query($sqla);
if($qa);
		
?>
<? echo $sslsite.$dominioapi ?>/redirecionador/<? echo $codigolink ?>-<? echo $usuario 
?>