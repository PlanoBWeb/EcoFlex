<?php

include_once "adm_login.php";

$smarty->assign("titulo", utf8_encode(TITULO));
$smarty->assign("nome", $_SESSION['nome']);
$smarty->display("admin/index.html");

?>