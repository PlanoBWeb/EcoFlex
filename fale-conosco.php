<?php

include_once "configs/config.php";
include_once "url.php";
for ($i=0; $i < 20; $i++) { 
	$i;
}
$smarty->assign("marca", $i);
$smarty->assign("pagina", $pagina);
$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);
$smarty->display("fale-conosco.html");

?>